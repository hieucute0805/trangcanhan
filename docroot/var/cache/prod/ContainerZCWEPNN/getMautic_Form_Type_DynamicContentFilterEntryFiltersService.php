<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.dynamic_content_filter_entry_filters' shared service.

$this->services['mautic.form.type.dynamic_content_filter_entry_filters'] = $instance = new \Mautic\CoreBundle\Form\Type\DynamicContentFilterEntryFiltersType(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));

$instance->setConnection(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));

return $instance;
