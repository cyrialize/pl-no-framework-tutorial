<?php declare(strict_types = 1);

$injector = new \Auryn\Injector();

$injector->alias('Symfony\Component\HttpFoundation\Request', 'Symfony\Component\HttpFoundation\Request');
$injector->share('Symfony\Component\HttpFoundation\Request');
$injector->define('Symfony\Component\HttpFoundation\Request', []);

$injector->alias('Symfony\Component\HttpFoundation\Response', 'Symfony\Component\HttpFoundation\Response');
$injector->share('Symfony\Component\HttpFoundation\Response');

return $injector;