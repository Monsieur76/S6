<?php


    namespace App\Controller;

    use App\Entity\User;
    use App\Event\RegistrationMail;
    use App\Form\PassType;
    use App\Form\ProfileType;
    use App\Form\UserType;
    use App\Repository\UserRepository;
    use App\Security\LoginFormAuthenticator;
    use App\Service\FileUploader;
    use Doctrine\ORM\EntityManagerInterface;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\EventDispatcher\EventDispatcherInterface;
    use Symfony\Component\EventDispatcher\GenericEvent;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
    use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
    use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

    class UserController extends AbstractController
    {
        private $em;
        public function __construct(EntityManagerInterface $em)
        {
            $this->em = $em;
        }

        /**
         * @Route("/register",name="register")
         * @return Response
         */
        public function register(
            Request $request,
            UserPasswordEncoderInterface $passwordEncoder,
            FileUploader $fileUp,
            UserRepository $userRepository,
            EventDispatcherInterface $dispatcher,
            TokenGeneratorInterface $tokenGenerator
    ): Response {
            $user = new User();
            $form = $this->createForm(UserType::class, $user);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $token = $tokenGenerator->generateToken();
                $user->setToken($token);
                $userRepository->setPassword($user,$form->get('password')->getData(),$passwordEncoder);
                $userRepository->setPhotoUser($form['img']->getData(),$fileUp,$user);
                $render =$this->render('page/mail/mail_register.html.twig', ['user' => $user->getToken()]);
                $registrationMail = new GenericEvent(['user'=>$user,'render'=>$render,'subject'=>'Confirmation d\'enregistrement']);
                $dispatcher->dispatch(RegistrationMail::Name,$registrationMail);
                $this->addFlash('succes', 'Enregistrement effectué veuillez vérifier vos mail pour confirmer
            l\'enregistrement');
                return $this->redirectToRoute('index');

            }
            return $this->render('page/user/register.html.twig', [
                'register' => 'active',
                'form' => $form->createView(),
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         * @Route ("/profile",name="profile")
         */
        public function profile(
            Request $request,
            UserRepository $userRepository,
            FileUploader $fileUp
        ){
            $id = $this->getUser();
            $user = $userRepository->findOneBy(['id' => $id]);
            $form = $this->createForm(ProfileType::class, $user);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $userRepository->setPhotoUser($form['img']->getData(),$fileUp,$user);
                $userRepository->persistFlush($user);
                $this->addFlash('succes', 'Votre profil a bien été enregistré');
                return $this->redirectToRoute('profile');
            }
            return $this->render('page/user/profile.html.twig', [
                'form' => $form->createView(),
                'user' => $userRepository->findOneBy(['id' => $id]),
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         * @Route("/deleteUser/{id}",name="deleteUser")
         */
        public function deleteUser(User $user)
        {
            $user->setFirstname('Utilisateur Supprimer');
            $user->setRoles(['delete']);
            $this->em->flush();
            return $this->redirectToRoute('logout');
        }

        /**
         * @IsGranted("ROLE_USER")
         * @Route("/password/{id}",name="password")
         */
        public function password(
            $id,
            UserRepository $userRepository,
            Request $request,
            UserPasswordEncoderInterface $passwordEncoder
        ){
            $user = $userRepository->findOneBy(['id' => $id]);
            $form = $this->createForm(PassType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $userRepository->setPassword($user,$form['password']->getData(),$passwordEncoder);
                $userRepository->persistFlush($user);
                $this->addFlash('succes', 'Votre profil a bien été enregistré');
                return $this->redirectToRoute('logout');
            }
            return $this->render('page/user/password.html.twig', [
                'user' => $userRepository->findOneBy(['id' => $id]),
                'form' => $form->createView(),
            ]);
        }

        /**
         * @Route ("/ConfirmMailRegister/{token}",name="ConfirmMailRegister")
         */
        public function ConfirmMailRegister(
            $token,
            UserRepository $userRepository,
            GuardAuthenticatorHandler $authenticatorHandler,
            LoginFormAuthenticator $formAuthenticator,
            Request $request
        ){
            $user = $userRepository->findOneBy(['token' => $token]);
            if ($user) {
                $user->setRoles(['ROLE_USER']);
                $user->setConfirmRegister(1);
                $authenticatorHandler->authenticateUserAndHandleSuccess(
                    $user,
                    $request,
                    $formAuthenticator,
                    'main'
                );
                $userRepository->persistFlush($user);
                $this->addFlash('succes', 'confirmation d\'enregistrement');
                return $this->render('page/user/add_register.html.twig', ['message' => 'Enregistrement Effectué']);
            }
            $this->addFlash('notice', 'Enregistrement échoué');
            return $this->render('page/user/add_register.html.twig', [
                'message' => 'Enregistrement échoué'
            ]);
        }
    }