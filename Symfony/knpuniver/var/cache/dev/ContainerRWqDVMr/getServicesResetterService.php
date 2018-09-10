<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['profiler'])) {
        yield 'profiler' => ($this->services['profiler'] ?? null);
    }
    if (isset($this->services['validator'])) {
        yield 'debug.validator' => ($this->services['validator'] ?? null);
    }
    if (isset($this->privates['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
    }
    if (isset($this->privates['form.type.entity'])) {
        yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
    }
    if (isset($this->services['security.token_storage'])) {
        yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
    }
}, function () {
    return 0 + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->services['security.token_storage']));
}), array('profiler' => 'reset', 'debug.validator' => 'reset', 'debug.stopwatch' => 'reset', 'form.type.entity' => 'reset', 'security.token_storage' => 'setToken'));
