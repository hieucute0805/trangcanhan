<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.validation.subscriber' shared service.

return $this->services['mautic.form.validation.subscriber'] = new \Mautic\FormBundle\EventListener\FormValidationSubscriber(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))));
