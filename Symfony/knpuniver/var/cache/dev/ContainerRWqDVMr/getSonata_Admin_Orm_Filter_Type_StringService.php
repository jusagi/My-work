<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

$this->factories['sonata.admin.orm.filter.type.string'] = function () {
    // Returns the public 'sonata.admin.orm.filter.type.string' service.

    return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
};

return $this->factories['sonata.admin.orm.filter.type.string']();
