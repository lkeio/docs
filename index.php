<?php

include('vendor/autoload.php');

use Educasoftware\Docs\Controller\DocsController;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Generator\UrlGenerator;

$route = new Route('/docs/{slug}', ['_controller' => DocsController::class]);

$routes = new RouteCollection();
$routes->add('docs_show', $route);

$context = new RequestContext('/');

// Routing can match routes with incoming requests
$matcher = new UrlMatcher($routes, $context);

$parameters = $matcher->match('/docs/test');

// $parameters = [
//     '_controller' => 'App\Controller\BlogController',
//     'slug' => 'lorem-ipsum',
//     '_route' => 'blog_show'
// ]

// Routing can also generate URLs for a given route
$generator = new UrlGenerator($routes, $context);

$url = $generator->generate('docs_show', [
    'slug' => 'test',
]);

// header('location:'.$url);

// $url = '/blog/my-blog-post'