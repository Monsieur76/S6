<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.K_H62a_' shared service.

return $this->privates['.service_locator.K_H62a_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
    'fileUp' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService.php', true],
    'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService.php', true],
    'tokenGenerator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService.php', true],
    'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
]);
