<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.menu.registry' shared service.

$this->services['sonata.block.menu.registry'] = $instance = new \Sonata\BlockBundle\Menu\MenuRegistry(array());

$instance->add('sonata_admin_sidebar');

return $instance;
