<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.page.subscriber.determine_winner' shared service.

return $this->services['mautic.page.subscriber.determine_winner'] = new \Mautic\PageBundle\EventListener\DetermineWinnerSubscriber(($this->services['mautic.page.repository.hit'] ?? $this->load('getMautic_Page_Repository_HitService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
