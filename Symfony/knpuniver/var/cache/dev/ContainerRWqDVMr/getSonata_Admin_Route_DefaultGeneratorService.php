<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.route.default_generator' shared service.

return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator(($this->services['router'] ?? $this->getRouterService()), ($this->services['sonata.admin.route.cache'] ?? $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($this->targetDirs[0].'/sonata/admin'), true)));
