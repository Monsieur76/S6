<?php

namespace App\Controller;

use App\Event\RegistrationMail;
use App\Form\ForgotType;
use App\Form\PassType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/login",name="login")
     */

    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('Page/user/connexion.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);

    }

    /**
     * @IsGranted("ROLE_USER")
     */
    /**
     * @Route ("/logout",name="logout")
     */
    public function logout()
    {
        throw new \Exception('Vous ête bien déconnecter');
    }

    /**
     * @Route("/forgot",name="forgot")
     */
    public function forgot(
        Request $request,
        UserRepository $userRepository,
        EventDispatcherInterface $dispatcher,
        TokenGeneratorInterface $tokenGenerator
    ){
        $form = $this->createForm(ForgotType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $userRepository->findOneBy(['email' => $request->request->get('forgot')['email']]);
            if (isset($user) === true ) {
                $token = $tokenGenerator->generateToken();
                $user->setToken($token);
                $render = $this->render('Page/mail/mailPass.html.twig', ['user' => $user->getToken()]);
                $registrationMail = new GenericEvent(['user'=>$user,'render'=>$render]);
                $dispatcher->dispatch(RegistrationMail::Name,$registrationMail);
                $this->addFlash('succes', 'Veillez vérifier votre mail');
                return $this->redirectToRoute('forgot');
            } else {
                $this->addFlash('alert', 'Mauvais mail');
                return $this->redirectToRoute('forgot');
            }
        }
        return $this->render('Page/user/forgot.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/UpdatePassword/{token}",name="updatePass")
     */
    public function updatePass(
        $token,
        UserPasswordEncoderInterface $passwordEncoder,
        Request $request,
        UserRepository $userRepository
    ){
        $form = $this->createForm(PassType::class);
        $user = $userRepository->findOneBy(['token' => $token]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (isset($user)) {
                $pass = $form->get('password')->getData();
                $userRepository->setPassword($user,$pass,$passwordEncoder);
                $userRepository->persistFlush($user);
                $this->addFlash('succes', 'Mot de pass modifié');
                return $this->redirectToRoute('updatePass', ['token' => $token]);

            } else {
                $this->addFlash('alert', 'Token invalide');
                return $this->redirectToRoute('updatePass', ['token' => $token]);
            }
        }
        return $this->render('Page/user/UpdatePassword.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}