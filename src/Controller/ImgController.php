<?php

    namespace App\Controller;

    use App\Entity\Img;
    use App\Form\UpdateImgType;
    use App\Repository\ImgRepository;
    use App\Service\FileUploader;
    use Doctrine\Common\Persistence\ObjectManager;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class ImgController extends AbstractController
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
            ImgRepository $imgRepository,
            Img $img,
            Request $request,
            FileUploader $fileUp
        ){
            $imgSearchId = $imgRepository->findOneBy(["id" => $id]);
            $form = $this->createForm(UpdateImgType::class, $img);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $file = $form['fileUpdate']->getData();
                if($file) {
                    $fileName = $fileUp->upload($file);
                    $img->setname($fileName);
                    $imgRepository->persistFlush($img);
                    $this->addFlash('succes', 'Votre figure a bien été créée');
                    $this->redirectToRoute('updateImg', ['id' => $id]);
                }
            }
            return $this->render('Page/figure/updateImg.html.twig', [
                'figure' => $imgSearchId,
                'form' => $form->createView()
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route ("/deleteImg/{id}", name="deleteImg")
         */
        public function deleteImg(Img $img, Request $request)
        {
            if ($this->isCsrfTokenValid('deleteImg' . $img->getId(), $request->get('_token'))) {
                $this->em->remove($img);
                $this->em->flush();
                $this->addFlash('succes', 'Votre figure a bien été supprimée');
                return $this->redirectToRoute('index');
            }
            return $this->redirectToRoute('index');
        }

    }