<?php
require_once __DIR__ . '/../config/bootstrap.php';

$products = new \Products\Products\Controllers\ProductsController();
$app->mount('/', $products->connect($app, $em));

$prod = new \Products\Products\Controllers\ProductsCtlApi();
$app->mount('/api/produtos/', $prod->connect($app, $em));

$cat = new \Products\Products\Controllers\ProductsCategoryCtlApi();
$app->mount('/api/categoria/', $cat->connect($app, $em));

$tagsApiControler = new \Products\Products\Controllers\ProductsTagsCtlApi();
$app->mount('/api/tags/', $tagsApiControler->connect($app, $em));

$app->run();