<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.subscriber.determine_winner' shared service.

return $this->services['mautic.form.subscriber.determine_winner'] = new \Mautic\FormBundle\EventListener\DetermineWinnerSubscriber(($this->services['mautic.form.repository.submission'] ?? $this->load('getMautic_Form_Repository_SubmissionService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
