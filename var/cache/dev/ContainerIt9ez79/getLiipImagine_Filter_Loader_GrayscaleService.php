<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'liip_imagine.filter.loader.grayscale' shared service.

include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\GrayscaleFilterLoader.php';

return $this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader();