<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.webhook.campaign.subscriber' shared service.

return $this->services['mautic.webhook.campaign.subscriber'] = new \Mautic\WebhookBundle\EventListener\CampaignSubscriber(($this->services['mautic.webhook.campaign.helper'] ?? $this->load('getMautic_Webhook_Campaign_HelperService.php')));
