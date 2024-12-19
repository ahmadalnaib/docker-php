<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../src/settings.php';

$app = AppFactory::create();

$app->get('/products', 'App\Controllers\ProductController:index');
$app->get('/products/{id}', 'App\Controllers\ProductController:show');
$app->post('/products', 'App\Controllers\ProductController:create');
$app->put('/products/{id}', 'App\Controllers\ProductController:update');
$app->delete('/products/{id}', 'App\Controllers\ProductController:delete');

$app->run();