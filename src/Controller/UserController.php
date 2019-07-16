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
                $user->setValid($token);
                $userRepository->setPassword($user,$form->get('password')->getData(),$passwordEncoder);
                $userRepository->setPhotoUser($form['photo']->getData(),$fileUp,$user);
                $render =$this->render('Page/mail/mailRegister.html.twig', ['user' => $user->getValid()]);
                $registrationMail = new GenericEvent(['user'=>$user,'render'=>$render]);
                $dispatcher->dispatch(RegistrationMail::Name,$registrationMail);
                $this->addFlash('succes', 'Enregistrement effectué veuillez vérifier vos mail pour confirmer
            l\'enregistrement');
                return $this->redirectToRoute('home');

            }
            return $this->render('Page/user/register.html.twig', [
                'register' => 'active',
                'form' => $form->createView(),
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route ("/profil",name="profil")
         */
        public function profil(
            Request $request,
            UserRepository $userRepository,
            FileUploader $fileUp
        ){
            $id = $this->getUser();
            $user = $userRepository->findOneBy(['id' => $id]);
            $form = $this->createForm(ProfileType::class, $user);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $userRepository->setPhotoUser($form['photo']->getData(),$fileUp,$user);
                $userRepository->persistFlush($user);
                $this->addFlash('succes', 'Votre profil a bien été enregistré');
                return $this->redirectToRoute('profil');
            }
            return $this->render('Page/user/profil.html.twig', [
                'form' => $form->createView(),
                'user' => $userRepository->findOneBy(['id' => $id]),
            ]);
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
         * @Route("/deleteUser/{id}",name="deleteUser")
         */
        public function deleteUser(User $user)
        {
            $user->setFirstname('Utilisateur Supprimer');
            $user->setValid(0);
            $this->em->flush();
            return $this->redirectToRoute('logout');
        }

        /**
         * @IsGranted("ROLE_USER")
         */
        /**
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
            return $this->render('Page/user/password.html.twig', [
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
            $bddUser = $userRepository->findOneBy(['valid' => $token]);
            if ($bddUser) {
                $bddUser->setRoles(['ROLE_USER']);
                $bddUser->setConfirm(1);
                $authenticatorHandler->authenticateUserAndHandleSuccess(
                    $bddUser,
                    $request,
                    $formAuthenticator,
                    'main'
                );
                $userRepository->persistFlush($bddUser);
                $this->addFlash('succes', 'confirmation d\'enregistrement');
                return $this->render('Page/user/AddRegister.html.twig', ['message' => 'Enregistrement Effectué']);
            }
            $this->addFlash('notice', 'Enregistrement échoué');
            return $this->render('Page/user/AddRegister.html.twig', [
                'message' => 'Enregistrement échoué'
            ]);
        }
    }