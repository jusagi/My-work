<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.dOJ.0GD' shared service.

return $this->privates['.service_locator.dOJ.0GD'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('logger' => function () {
    return ($this->privates['monolog.logger'] ?? $this->load('getMonolog_LoggerService.php'));
}));