<?php


    namespace App\EventListener;


    use App\Event\RegistrationMail;
    use App\Repository\UserRepository;
    use Egulias\EmailValidator\EmailValidator;
    use Egulias\EmailValidator\Validation\RFCValidation;
    use Symfony\Component\EventDispatcher\EventSubscriberInterface;
    use Symfony\Component\EventDispatcher\GenericEvent;

    class CustomEvent implements EventSubscriberInterface
    {
        private $mailer;
        private $repo;

        public function __construct(\Swift_Mailer $mailer,UserRepository $repo)
        {
            $this->mailer = $mailer;
            $this->repo = $repo;
        }

        public static function getSubscribedEvents()
        {
            return [
                RegistrationMail::Name => 'registrationMail'
            ];
        }

        public function registrationMail(GenericEvent $event)
        {
            $table = $event->getSubject();
            $user = $table['user'];
            $render = $table['render'];
            $user->setConfirmRegister(0);
            $this->repo->persistFlush($user);
            $validator = new EmailValidator();
            $validator->isValid($user->getEmail(), new RFCValidation());

            $message = (new \Swift_Message($table['subject']))
                ->setFrom('snowtrix@hotmail.fr')
                ->setTo($user->getEmail())
                ->setBody($render, 'text/html');
            $this->mailer->send($message);
        }
    }