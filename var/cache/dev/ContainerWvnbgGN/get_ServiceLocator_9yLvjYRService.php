<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.9yLvjYR' shared service.

return $this->privates['.service_locator.9yLvjYR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'figure' => ['privates', '.errored..service_locator.9yLvjYR.App\\Entity\\Figure', NULL, 'Cannot autowire service ".service_locator.9yLvjYR": it references class "App\\Entity\\Figure" but no such service exists.'],
    'figureRepository' => ['privates', 'App\\Repository\\FigureRepository', 'getFigureRepositoryService.php', true],
    'fileUp' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService.php', true],
]);