<?php declare(strict_types = 1);

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');
$injector->alias('Core\RenderInterface', 'Core\PlatesRenderer');
$injector->delegate('League\Plates\Engine', function() use ($injector){
    $templates = new League\Plates\Engine(__DIR__ . '/../templates');
    return $templates;
});

return $injector;