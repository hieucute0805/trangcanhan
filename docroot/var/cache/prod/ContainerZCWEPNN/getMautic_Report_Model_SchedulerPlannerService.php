<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.report.model.scheduler_planner' shared service.

return $this->services['mautic.report.model.scheduler_planner'] = new \Mautic\ReportBundle\Scheduler\Model\SchedulerPlanner(($this->services['mautic.report.model.scheduler_date_builder'] ?? $this->load('getMautic_Report_Model_SchedulerDateBuilderService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
