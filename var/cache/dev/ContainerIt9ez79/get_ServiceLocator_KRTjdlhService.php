<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.kRTjdlh' shared service.

return $this->privates['.service_locator.kRTjdlh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
    'userInterface' => ['privates', '.errored..service_locator.kRTjdlh.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.kRTjdlh": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
], [
    'repo' => 'App\\Repository\\UserRepository',
    'userInterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
]);
