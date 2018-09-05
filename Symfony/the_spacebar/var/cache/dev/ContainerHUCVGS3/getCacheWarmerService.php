<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_warmer' shared service.

return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
    yield 0 => ($this->privates['router.cache_warmer'] ?? $this->load('getRouter_CacheWarmerService.php'));
    yield 1 => ($this->privates['annotations.cache_warmer'] ?? $this->load('getAnnotations_CacheWarmerService.php'));
    yield 2 => ($this->privates['twig.cache_warmer'] ?? $this->load('getTwig_CacheWarmerService.php'));
    yield 3 => ($this->privates['twig.template_cache_warmer'] ?? $this->load('getTwig_TemplateCacheWarmerService.php'));
}, 4));
