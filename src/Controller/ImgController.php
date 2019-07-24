<?php

    namespace App\Controller;

    use App\Entity\Img;
    use App\Form\UpdateImgType;
    use App\Repository\ImgRepository;
    use App\Service\FileUploader;
    use Doctrine\ORM\EntityManagerInterface;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class ImgController extends AbstractController
    {
        private $em;

        public function __construct(EntityManagerInterface $em)
        {
            $this->em = $em;
        }

        /**
         * @IsGranted("ROLE_USER")
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
                $file = $form['nameImg']->getData();
                if($file) {
                    $img->setNameImg($fileUp->upload($file));
                    $imgRepository->persistFlush($img);
                    $this->addFlash('succes', 'Votre image a été changée');
                    $this->redirectToRoute('updateImg', ['id' => $id]);
                }
            }
            return $this->render('page/figure/update_img.html.twig', [
                'img' => $imgSearchId,
                'form' => $form->createView()
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
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