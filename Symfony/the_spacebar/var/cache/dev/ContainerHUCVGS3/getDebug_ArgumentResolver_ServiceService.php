<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\ArticleController::show' => function () {
    return ($this->privates['.service_locator.rAs6Sew'] ?? $this->load('get_ServiceLocator_RAs6SewService.php'));
}, 'App\\Controller\\ArticleController::toggleArticleHeart' => function () {
    return ($this->privates['.service_locator.dOJ.0GD'] ?? $this->load('get_ServiceLocator_DOJ_0GDService.php'));
}, 'App\\Controller\\ArticleController:show' => function () {
    return ($this->privates['.service_locator.rAs6Sew'] ?? $this->load('get_ServiceLocator_RAs6SewService.php'));
}, 'App\\Controller\\ArticleController:toggleArticleHeart' => function () {
    return ($this->privates['.service_locator.dOJ.0GD'] ?? $this->load('get_ServiceLocator_DOJ_0GDService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
