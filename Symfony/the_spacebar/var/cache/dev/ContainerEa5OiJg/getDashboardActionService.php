<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\AdminBundle\Action\DashboardAction' shared service.

$this->services['Sonata\AdminBundle\Action\DashboardAction'] = $instance = new \Sonata\AdminBundle\Action\DashboardAction($this->parameters['sonata.admin.configuration.dashboard_blocks'], ($this->services['sonata.admin.breadcrumbs_builder'] ?? $this->load('getSonata_Admin_BreadcrumbsBuilderService.php')), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));

$instance->setContainer($this);

return $instance;
