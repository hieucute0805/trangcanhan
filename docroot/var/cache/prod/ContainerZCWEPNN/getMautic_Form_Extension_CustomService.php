<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.extension.custom' shared service.

return $this->services['mautic.form.extension.custom'] = new \Mautic\CoreBundle\Form\Extension\CustomFormExtension(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
