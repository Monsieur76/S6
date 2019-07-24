<?php

    namespace App\Controller;

    use App\Entity\Comment;
    use App\Entity\Figure;
    use App\Form\HiddenForPaginationJsType;
    use App\Form\CommentType;
    use App\Form\FigureType;
    use App\Form\LoadMoreType;
    use App\Repository\CommentRepository;
    use App\Repository\FigureRepository;
    use App\Repository\GroupNumberFigureRepository;
    use App\Repository\ImgRepository;
    use App\Repository\VideoRepository;
    use App\Service\FileUploader;
    use Doctrine\ORM\EntityManagerInterface;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class FigureController extends AbstractController
    {
        private $em;

        public function __construct(EntityManagerInterface $em)
        {
            $this->em = $em;
        }

        /**
         * @Route("/" , name="index")
         * @return Response
         */
        public function index(
            FigureRepository $figureRepository,
            GroupNumberFigureRepository $group,
            Request $request
        ): Response{
            $group->insertGroup();
            $form = $this->createForm(LoadMoreType::class);
            $form->handleRequest($request);
            $max = $form->isSubmitted() && $form->isValid() ? 115 : 15;
            return $this->render('page/index.html.twig', [
                'index' => 'active',
                'figure' => $figureRepository->findAllFigure($max),
                'form' => $form->createView(),
            ]);
        }

        /**
         * @Route("/figure/{id}",name="figure")
         * @param Request $request
         * @param Figure $figure
         * @return Response
         */
        public function figure(
            Request $request,
            Figure $figure,
            CommentRepository $commentRepository
        ){
            $com = new Comment();
            $idFigure = $figure->getId();
            $comment = $commentRepository->findLimitComment($idFigure);
            $form2 = $this->createForm(HiddenForPaginationJsType::class);
            $form = $this->createForm(CommentType::class, $com);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $com->setUser($this->getUser());
                $com->setFigure($figure);
                $commentRepository->persistFlush($com);
                $this->addFlash('succes', 'Votre Commentaire a bien été enregistré');
                return $this->redirectToRoute('figure', ['id' => $idFigure]);
            }
            $form2->handleRequest($request);
            if ($form2->isSubmitted()) {
                $comment = $commentRepository->findLimitComment($idFigure, 100);
            }
            return $this->render('page/figure/figure.html.twig', [
                'figure' => $figure,
                'comment' => $comment,
                'form' => $form->createView(),
                'form2' => $form2->createView(),
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         * @Route("/updateFigure/{id}",name="updateFigure")
         * @return Response
         */
        public function updateFigure(
            Figure $figure,
            Request $request,
            ImgRepository $imgRepository,
            VideoRepository $videoRepository,
            FileUploader $fileUp,
            FigureRepository $figureRepository
        ): Response{
            $form = $this->createForm(FigureType::class, $figure);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $figureRepository->setFigureImg($form['imgFigure']->getData(), $fileUp, $figure);
                $videoRepository->setVideos($form['videos']->getData(), $figure->getId(), $figureRepository);
                $imgRepository->setMultipleImg($form['imgSecondary']->getData(), $fileUp, $figure);
                $figureRepository->persistFlush($figure);
                $this->addFlash('succes', 'La Modification a bien été prise en compte');
                return $this->redirectToRoute('index');
        }
            return $this->render('page/figure/update_figure.html.twig', [
                'figure' => $figure,
                'form' => $form->createView(),
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         * @Route("/creatFigure",name="creatFigure")
         */
        public function creatFigure(
            Request $request,
            FigureRepository $figureRepository,
            ImgRepository $imgRepository,
            FileUploader $fileUp,
            VideoRepository $videoRepository
        ){
            $figure = new Figure();
            $form = $this->createForm(FigureType::class, $figure);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()
            ) {
                if ($figureRepository->findOneBy(['nameFigure' => $figure->getNameFigure()]) === null) {
                    $figureRepository->setFigureImg($form['imgFigure']->getData(),$fileUp,$figure);
                    $videoRepository->setVideos($form['videos']->getData(),$figure->getId(),$figureRepository);
                    $imgRepository->setMultipleImg($form['imgSecondary']->getData(),$fileUp,$figure);
                    $figureRepository->persistFlush($figure);
                    $this->addFlash('succes', 'Votre figure a bien été créée');
                    return $this->redirectToRoute('index');
                }
                $this->addFlash('alert', 'Le nom a déjà été créé');
                return $this->redirectToRoute('index');
            }
            return $this->render('page/figure/creat_figure.html.twig', [
                'form' => $form->createView()
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         * @Route ("/deleteFigure/{id}", name="deleteFigure")
         */
        public function deleteFigure(
            Figure $figure,
            Request $request
        ){
            if ($this->isCsrfTokenValid('delete' . $figure->getId(), $request->get('_token'))) {
                $this->em->remove($figure);
                $this->em->flush();
                $this->addFlash('succes', 'Votre figure a bien été supprimée');
            }
            return $this->redirectToRoute('index');
        }

        /**
         * @IsGranted("ROLE_USER")
         * @Route ("/deleteImgFigure/{id}", name="deleteImgFigure")
         */
        public function deleteImgFigure(
            Figure $figure,
            Request $request
        ){
            if ($this->isCsrfTokenValid('deleteImgPost' . $figure->getId(), $request->get('_token'))) {
                $this->em->remove($figure);
                $this->em->flush();
                $this->addFlash('succes', 'Votre image a bien été supprimée');
                return $this->redirectToRoute('index');
            }
            return $this->redirectToRoute('index');
        }
    }