<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.dashboard.form.type.widget' shared service.

return $this->services['mautic.dashboard.form.type.widget'] = new \Mautic\DashboardBundle\Form\Type\WidgetType(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()));
