<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.social.form.type.twitter.tweet' shared service.

return $this->services['mautic.social.form.type.twitter.tweet'] = new \MauticPlugin\MauticSocialBundle\Form\Type\TweetType(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
