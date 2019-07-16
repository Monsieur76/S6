<?php

    namespace App\Controller;

    use App\Entity\Video;
    use App\Form\UpdateVideoType;
    use App\Repository\VideoRepository;
    use Doctrine\Common\Persistence\ObjectManager;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

    class VideoController extends AbstractController
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
         * @Route("/updatevid/{id}",name="updateVideo")
         */
        public function updateVideo(
            $id,
            VideoRepository $videoRepository,
            Request $request
        ){
            $video = $videoRepository->findOneBy(["id" => $id]);
            $form = $this->createForm(UpdateVideoType::class, $video);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $video->setName($video->getName());
                $this->em->persist($video);
                $this->em->flush();
                $this->addFlash('succes', 'Votre video a bien été créée');
                $this->redirectToRoute('updateVideo', ['id' => $id]);
            }
            return $this->render('Page/post/updateVideo.html.twig', [
                'video' => $video,
                'form' => $form->createView()
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route ("/deleteVid/{id}", name="deleteVid")
         */
        public function deleteVid(Video $video, Request $request)
        {
            if ($this->isCsrfTokenValid('deleteVid' . $video->getId(), $request->get('_token'))) {
                $this->em->remove($video);
                $this->em->flush();
                $this->addFlash('succes', 'Votre vidéo a bien été supprimée');
                return $this->redirectToRoute('home');

            }
            return $this->redirectToRoute('home');
        }
    }