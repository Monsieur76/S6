<?php

    namespace App\Controller;

    use App\Entity\Comment;
    use App\Entity\Figure;
    use App\Form\HiddenForPaginationJsType;
    use App\Form\CommentType;
    use App\Form\CreatFigureType;
    use App\Form\UpdateFigureType;
    use App\Repository\CommentRepository;
    use App\Repository\FigureRepository;
    use App\Repository\GroupNumberFigureRepository;
    use App\Repository\ImgRepository;
    use App\Repository\VideoRepository;
    use App\Service\FileUploader;
    use Doctrine\ORM\EntityManagerInterface;
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
         * @Route("/" , name="home")
         * @return Response
         */
        public function index(
            FigureRepository $figureRepository,
            GroupNumberFigureRepository $group
    ): Response
        {
            $group->insertGroup();
            return $this->render('Page/home.html.twig', [
                'home' => 'active',
                'post' => $figureRepository->findAllFigure(),
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
            ImgRepository $imgRepository,
            CommentRepository $commentRepository,
            VideoRepository $videoRepository
        ){
            $com = new Comment();
            $idDet = $figure->getId();
            $img = $imgRepository->imgFindLimit($idDet);
            $comment = $commentRepository->findLimitComment($idDet);
            $video = $videoRepository->videoFindLimit($idDet);
            $form2 = $this->createForm(HiddenForPaginationJsType::class);
            $form = $this->createForm(CommentType::class, $com);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $com->setUser($this->getUser());
                $com->setFigure($figure);
                $commentRepository->persistFlush($com);
                $this->addFlash('succes', 'Votre Commentaire à bien été enregistré');
                return $this->redirectToRoute('post', ['id' => $figure->getId()]);
            }
            $form2->handleRequest($request);
            if ($form2->isSubmitted()) {
                $comment = $commentRepository->findLimitComment($idDet, 100);
            }
            return $this->render('Page/post/post.html.twig', [
                'id' => $figure,
                'trick' => $figure->getId(),
                'video' => $video,
                'figure' => $img,
                'comment' => $comment,
                'form' => $form->createView(),
                'form2' => $form2->createView(),
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route("/updateFigure/{id}",name="updateFigure")
         * @return Response
         */
        public function updateFigure(
            Figure $figure,
            Request $request,
            ImgRepository $imgRepository,
            CommentRepository $commentRepository,
            VideoRepository $videoRepository,
            FileUploader $fileUp,
            FigureRepository $figureRepository
        ): Response
        {
            $idDet = $figure->getId();
            $img = $imgRepository->imgFindLimit($idDet);
            $comment = $commentRepository->findLimitComment($idDet);
            $video = $videoRepository->videoFindLimit($idDet);
            $form = $this->createForm(UpdateFigureType::class, $figure);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $file = $form['figure']->getData();
                $imgRepository->setFigureImg($file,$fileUp,$figure);
                $url = ['lien1'=> $form['lien1']->getData(),'lien2'=> $form['lien2']->getData(),
                    'lien3' => $form['lien3']->getData()];
                $videoRepository->setVideos($url,$figure->getId(),$figureRepository);
                $file2 = $form['figures']->getData();
                $imgRepository->setMultipleImg($file2,$fileUp,$figure);
                $figureRepository->persistFlush($figure);
                $this->addFlash('succes', 'La Modification à bien été prise en compte');
                return $this->redirectToRoute('home');
        }
            return $this->render('Page/post/updatePost.html.twig', [
                'id' => $figure,
                'form' => $form->createView(),
                'figure' => $img,
                'video' => $video,
                'comment' => $comment,

            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
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
            $form = $this->createForm(CreatFigureType::class, $figure);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()
            ) {
                if ($figureRepository->findOneBy(['name' => $figure->getNameFigure()]) === null) {
                    $file = $form['figure']->getData();
                    $imgRepository->setFigureImg($file,$fileUp,$figure);
                    $lien = ['lien1'=> $form['lien1']->getData(),'lien2'=> $form['lien2']->getData(),
                        'lien3' => $form['lien3']->getData()];
                    $videoRepository->setVideos($lien,$figure->getId(),$figureRepository);
                    $file2 = $form['figures']->getData();
                    $imgRepository->setMultipleImg($file2,$fileUp,$figure);
                    $figureRepository->persistFlush($figure);
                    $this->addFlash('succes', 'Votre figure à bien été créé');
                    return $this->redirectToRoute('home');
                }
                $this->addFlash('alert', 'Le nom a déjà été créé');
                return $this->redirectToRoute('home');
            }
            return $this->render('Page/post/creatPost.html.twig', [
                'form' => $form->createView()
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
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
            return $this->redirectToRoute('home');
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
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
                return $this->redirectToRoute('home');
            }
            return $this->redirectToRoute('home');
        }
    }