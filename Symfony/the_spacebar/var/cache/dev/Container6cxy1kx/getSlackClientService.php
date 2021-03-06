<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\SlackClient' shared autowired service.

$this->privates['App\Service\SlackClient'] = $instance = new \App\Service\SlackClient(($this->services['nexy_slack.client'] ?? $this->load('getNexySlack_ClientService.php')));

$instance->setLogger(($this->privates['monolog.logger'] ?? $this->load('getMonolog_LoggerService.php')));

return $instance;
