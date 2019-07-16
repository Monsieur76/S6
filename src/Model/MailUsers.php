<?php


    namespace App\Model;


    use App\Entity\User;
    use Egulias\EmailValidator\EmailValidator;
    use Egulias\EmailValidator\Validation\RFCValidation;

    class MailUsers
    {

        private $user;

        public function __construct()
        {
            $this->user = new User();
        }

        public function getUser()
        {
        return $this->user;
        }

        public function mailUser($token,$mailer,$render,$user = null)
        {
            if($user === null) {
                $user = $this->user;
                    }
            $validator = new EmailValidator();
            $user->setValid($token);
            $validator->isValid($user->getEmail(), new RFCValidation());

            $message = (new \Swift_Message('Confirmation d\'enregistrement'))
                ->setFrom($user->getEmail())
                ->setTo('snowtrix@hotmail.fr')
                ->setBody($render, 'text/html');
            $mailer->send($message);
        }
    }