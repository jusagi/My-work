<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

$a = ($this->services['kernel'] ?? $this->get('kernel', 1));
$b = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

$c = new \Symfony\Component\HttpKernel\Config\FileLocator($a, 'D:\\the_spacebar\\src/Resources', array(0 => 'D:\\the_spacebar\\src'));

$d = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($b);

$e = new \Symfony\Component\Config\Loader\LoaderResolver();
$e->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$e->addLoader($d);
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($c, $d));
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($c, $d));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($a)), $e);
