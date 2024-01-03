<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.sync.notification.handler_container' shared service.

$this->services['mautic.integrations.sync.notification.handler_container'] = $instance = new \Mautic\IntegrationsBundle\Sync\Notification\Handler\HandlerContainer();

$instance->registerHandler(($this->services['mautic.integrations.sync.notification.handler_company'] ?? $this->load('getMautic_Integrations_Sync_Notification_HandlerCompanyService.php')));
$instance->registerHandler(($this->services['mautic.integrations.sync.notification.handler_contact'] ?? $this->load('getMautic_Integrations_Sync_Notification_HandlerContactService.php')));

return $instance;
