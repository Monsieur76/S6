<?php

    namespace App\Controller;

    use App\Entity\Video;
    use App\Form\UpdateVideoType;
    use App\Repository\VideoRepository;
    use Doctrine\ORM\EntityManagerInterface;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

    class VideoController extends AbstractController
    {
        private $em;
        public function __construct(EntityManagerInterface $em)
        {
            $this->em = $em;
        }

        /**
         * @IsGranted("ROLE_USER")
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
                $video->setUrl($video->getUrl());
                $videoRepository->persistFlush($video);
                $this->addFlash('succes', 'Votre video a bien été créée');
                $this->redirectToRoute('updateVideo', ['id' => $id]);
            }
            return $this->render('page/figure/update_video', [
                'video' => $video,
                'form' => $form->createView()
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         * @Route ("/deleteVid/{id}", name="deleteVid")
         * @param Video $video
         * @param Request $request
         * @return \Symfony\Component\HttpFoundation\RedirectResponse
         */
        public function deleteVid(Video $video, Request $request)
        {
            if ($this->isCsrfTokenValid('deleteVid' . $video->getId(), $request->get('_token'))) {
                $this->em->remove($video);
                $this->em->flush();
                $this->addFlash('succes', 'Votre vidéo a bien été supprimée');
                return $this->redirectToRoute('index');

            }
            return $this->redirectToRoute('index');
        }
    }