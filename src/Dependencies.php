<?php declare(strict_types = 1);

$injector = new \Auryn\Injector();

$injector->alias('Symfony\Component\HttpFoundation\Request', 'Symfony\Component\HttpFoundation\Request');
$injector->share('Symfony\Component\HttpFoundation\Request');
$injector->define('Symfony\Component\HttpFoundation\Request', [
    $_GET,
    $_POST,
    [],
    $_COOKIE,
    $_FILES,
    $_SERVER
]);

$injector->alias('Symfony\Component\HttpFoundation\Response', 'Symfony\Component\HttpFoundation\Response');
$injector->share('Symfony\Component\HttpFoundation\Response');

$injector->define('Mustache_Engine', [
    ':options' => [
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
            'extension' => '.html',
        ]),
    ],
]);

$injector->alias('Example\Template\Renderer', 'Example\Template\TwigRenderer');
$injector->delegate('Twig\Environment', function() use ($injector) {
    $loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
    $twig = new Twig\Environment($loader);
    return $twig;
});

return $injector;