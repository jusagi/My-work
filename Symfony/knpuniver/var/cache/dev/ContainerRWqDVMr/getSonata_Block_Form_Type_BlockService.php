<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.block.form.type.block' shared service.

return $this->privates['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()));