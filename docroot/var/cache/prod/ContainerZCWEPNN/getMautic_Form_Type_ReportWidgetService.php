<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.report_widget' shared service.

return $this->services['mautic.form.type.report_widget'] = new \Mautic\ReportBundle\Form\Type\ReportWidgetType(($this->services['mautic.report.model.report'] ?? $this->load('getMautic_Report_Model_ReportService.php')));
