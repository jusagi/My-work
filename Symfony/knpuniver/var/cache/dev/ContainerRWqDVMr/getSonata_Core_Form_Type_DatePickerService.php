<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.core.form.type.date_picker' shared service.

return $this->privates['sonata.core.form.type.date_picker'] = new \Sonata\CoreBundle\Form\Type\DatePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? $this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter()), ($this->services['translator'] ?? $this->getTranslatorService()));
