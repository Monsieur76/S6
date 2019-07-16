<?php


    namespace App\Event;

    use Symfony\Component\EventDispatcher\Event;

    class RegistrationMail extends Event
    {

        public const Name = 'registration';
    }