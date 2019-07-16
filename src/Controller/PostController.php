<?php

    namespace App\Controller;

    use App\Entity\Comment;
    use App\Entity\Figure;
    use App\Form\HiddenForPaginationJsType;
    use App\Form\CommentType;
    use App\Form\CreatPostType;
    use App\Form\UpdatePostType;
    use App\Repository\CommentRepository;
    use App\Repository\PostRepository;
    use App\Repository\FigureRepository;
    use App\Repository\VideoRepository;
    use App\Service\FileUploader;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class PostController extends AbstractController
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
        public function home(PostRepository $post): Response
        {
            return $this->render('Page/home.html.twig', [
                'home' => 'active',
                'post' => $post->findAllPost(),
            ]);
        }

        /**
         * @Route("/post/{id}",name="post")
         * @param Request $request
         * @param Figure $post
         * @return Response
         */
        public function post(
            Request $request,
            Figure $post,
            FigureRepository $figureRepository,
            CommentRepository $commentRepository,
            VideoRepository $videoRepository
        ){
            $com = new Comment();
            $idDet = $post->getId();
            $figure = $figureRepository->figureFindLimit($idDet);
            $comment = $commentRepository->findLimitComment($idDet);
            $video = $videoRepository->videoFindLimit($idDet);
            $form2 = $this->createForm(HiddenForPaginationJsType::class);
            $form = $this->createForm(CommentType::class, $com);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $com->setUser($this->getUser());
                $com->setPost($post);
                $commentRepository->persistFlush($com);
                $this->addFlash('succes', 'Votre Commentaire à bien été enregistré');
                return $this->redirectToRoute('post', ['id' => $post->getId()]);
            }
            $form2->handleRequest($request);
            if ($form2->isSubmitted()) {
                $comment = $commentRepository->findLimitComment($idDet, 100);
            }
            return $this->render('Page/post/post.html.twig', [
                'id' => $post,
                'trick' => $post->getId(),
                'video' => $video,
                'figure' => $figure,
                'comment' => $comment,
                'form' => $form->createView(),
                'form2' => $form2->createView(),
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route("/updatePost/{id}",name="updatePost")
         * @return Response
         */
        public function updatePost(
            Figure $post,
            Request $request,
            FigureRepository $figureRepository,
            CommentRepository $commentRepository,
            VideoRepository $videoRepository,
            FileUploader $fileUp,
            PostRepository $postRepository
        ): Response
        {
            $idDet = $post->getId();
            $figure = $figureRepository->figureFindLimit($idDet);
            $comment = $commentRepository->findLimitComment($idDet);
            $video = $videoRepository->videoFindLimit($idDet);
            $form = $this->createForm(UpdatePostType::class, $post);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $file = $form['figure']->getData();
                $figureRepository->setPostImg($file,$fileUp,$post);
                $lien = ['lien1'=> $form['lien1']->getData(),'lien2'=> $form['lien2']->getData(),
                    'lien3' => $form['lien3']->getData()];
                $videoRepository->setVideos($lien,$post->getId(),$postRepository);
                $file2 = $form['figures']->getData();
                $figureRepository->setMultipleImg($file2,$fileUp,$post);
                $postRepository->persistFlush($post);
                $this->addFlash('succes', 'La Modification à bien été prise en compte');
                return $this->redirectToRoute('home');
        }
            return $this->render('Page/post/updatePost.html.twig', [
                'id' => $post,
                'form' => $form->createView(),
                'figure' => $figure,
                'video' => $video,
                'comment' => $comment,

            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route("/creatPost",name="creatPost")
         */
        public function creatPost(
            Request $request,
            PostRepository $postRepository,
            FigureRepository $figureRepository,
            FileUploader $fileUp,
            VideoRepository $videoRepository
        ){
            $post = new Figure();
            $form = $this->createForm(CreatPostType::class, $post);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()
            ) {
                if ($postRepository->findOneBy(['name' => $post->getName()]) === null) {
                    $file = $form['figure']->getData();
                    $figureRepository->setPostImg($file,$fileUp,$post);
                    $lien = ['lien1'=> $form['lien1']->getData(),'lien2'=> $form['lien2']->getData(),
                        'lien3' => $form['lien3']->getData()];
                    $videoRepository->setVideos($lien,$post->getId(),$postRepository);
                    $file2 = $form['figures']->getData();
                    $figureRepository->setMultipleImg($file2,$fileUp,$post);
                    $postRepository->persistFlush($post);
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
         * @Route ("/deletePost/{id}", name="deletePost")
         */
        public function deletePost(
            Figure $post,
            Request $request
        ){
            if ($this->isCsrfTokenValid('delete' . $post->getId(), $request->get('_token'))) {
                $this->em->remove($post);
                $this->em->flush();
                $this->addFlash('succes', 'Votre figure a bien été supprimée');
            }
            return $this->redirectToRoute('home');
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route ("/deleteImgPost/{id}", name="deleteImgPost")
         */
        public function deleteImgPost(
            Figure $post,
            Request $request
        ){
            if ($this->isCsrfTokenValid('deleteImgPost' . $post->getId(), $request->get('_token'))) {
                $this->em->remove($post);
                $this->em->flush();
                $this->addFlash('succes', 'Votre image a bien été supprimée');
                return $this->redirectToRoute('home');
            }
            return $this->redirectToRoute('home');
        }
    }