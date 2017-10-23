<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), [            
'twig.path' => __DIR__.'/../views',
         ]);

// ... definitions
$app->get('/', function() {
		return 'Hello world!';
});
$app->get('/hello', function() {
		return 'Hello world!';
});

$app->run();
