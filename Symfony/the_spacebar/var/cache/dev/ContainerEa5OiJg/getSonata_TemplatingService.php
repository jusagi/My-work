<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.templating' shared service.

return $this->privates['sonata.templating'] = new \Sonata\BlockBundle\Templating\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), new \Sonata\BlockBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))), new \Sonata\BlockBundle\Templating\TemplateLocator(($this->privates['file_locator'] ?? $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), 'D:\\the_spacebar\\src/Resources', array(0 => 'D:\\the_spacebar\\src'))), $this->targetDirs[0]));
