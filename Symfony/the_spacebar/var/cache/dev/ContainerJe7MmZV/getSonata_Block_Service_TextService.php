<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.service.text' shared service.

return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', ($this->privates['sonata.templating'] ?? $this->load('getSonata_TemplatingService.php')));