<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.5c8P3v8' shared service.

return $this->privates['.service_locator.5c8P3v8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'championnat' => ['privates', '.errored..service_locator.5c8P3v8.App\\Entity\\Championnats', NULL, 'Cannot autowire service ".service_locator.5c8P3v8": it references class "App\\Entity\\Championnats" but no such service exists.'],
    'classementRepo' => ['privates', 'App\\Repository\\ClassementRepository', 'getClassementRepositoryService.php', true],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'repoMatch' => ['privates', 'App\\Repository\\MatchsRepository', 'getMatchsRepositoryService.php', true],
], [
    'championnat' => 'App\\Entity\\Championnats',
    'classementRepo' => 'App\\Repository\\ClassementRepository',
    'manager' => '?',
    'repoMatch' => 'App\\Repository\\MatchsRepository',
]);