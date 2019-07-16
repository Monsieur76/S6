<?php

    namespace App\Controller;

    use App\Entity\Figure;
    use App\Form\UpdateImgType;
    use App\Repository\FigureRepository;
    use App\Service\FileUploader;
    use Doctrine\Common\Persistence\ObjectManager;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Bundle\MakerBundle\Validator;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class FigureController extends AbstractController
    {
        private $em;

        public function __construct(ObjectManager $em)
        {
            $this->em = $em;
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route("/updateImg/{id}",name="updateImg")
         * @param $id
         * @param Request $request
         * @return Response
         */
        public function updateImg(
            $id,
            FigureRepository $figureRepository,
            Figure $figure,
            Request $request,
            FileUploader $fileUp
        ){
            $figureSearchId = $figureRepository->findOneBy(["id" => $id]);
            $form = $this->createForm(UpdateImgType::class, $figure);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $file = $form['fileUpdate']->getData();
                if($file) {
                    $fileName = $fileUp->upload($file);
                    $figure->setname($fileName);
                    $figureRepository->persistFlush($figure);
                    $this->addFlash('succes', 'Votre figure a bien été créée');
                    $this->redirectToRoute('updateImg', ['id' => $id]);
                }
            }
            return $this->render('Page/post/updateImg.html.twig', [
                'figure' => $figureSearchId,
                'form' => $form->createView()
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route ("/deleteImg/{id}", name="deleteImg")
         */
        public function deleteImg(Figure $figure, Request $request)
        {
            if ($this->isCsrfTokenValid('deleteImg' . $figure->getId(), $request->get('_token'))) {
                $this->em->remove($figure);
                $this->em->flush();
                $this->addFlash('succes', 'Votre figure a bien été supprimée');
                return $this->redirectToRoute('home');
            }
            return $this->redirectToRoute('home');
        }

    }