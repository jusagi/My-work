<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.djXzDhX' shared service.

return $this->privates['.service_locator.djXzDhX'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('markdownHelper' => function (): \App\Service\MarkdownHelper {
    return ($this->privates['App\Service\MarkdownHelper'] ?? $this->load('getMarkdownHelperService.php'));
}, 'slack' => function () {
    return ($this->services['nexy_slack.client'] ?? $this->load('getNexySlack_ClientService.php'));
}));