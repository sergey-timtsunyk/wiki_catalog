<?php

use Wiki\Catalog\Controllers\{ArticlesController, IndexController, TagsController, ReferencesController};
use Wiki\Catalog\Data\Connector;

define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/wiki_catalog');

require_once '../vendor/autoload.php';
$confDb = require '../config/db.php';

$uri = $_SERVER['REQUEST_URI'];
$urlPath = parse_url($uri, PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$mappingAction = [
    'GET' => [
        '/' => [IndexController::class, 'get'],
        '/article/remove' => [ArticlesController::class, 'remove'],
        '/reference/remove' => [ReferencesController::class, 'remove'],
        '/tag/remove' => [TagsController::class, 'remove'],

        '/article/list' => [ArticlesController::class, 'showList'],
        '/reference/list' => [ReferencesController::class, 'showList'],
        '/tag/list' => [TagsController::class, 'showList'],

        '/article/edit' => [ArticlesController::class, 'edit'],
        '/reference/edit' => [ReferencesController::class, 'edit'],
        '/tag/edit' => [TagsController::class, 'edit'],

        '/article/create' => [ArticlesController::class, 'create'],
        '/reference/create' => [ReferencesController::class, 'create'],
        '/tag/create' => [TagsController::class, 'create'],

        '/article/upload_url' => [ArticlesController::class, 'getUploadUrl'],

        '/reference/upload_reference' => [ReferencesController::class, 'getUploadReference'],
        '/tag/upload_reference' => [TagsController::class, 'getUploadTag'],
    ],
    'POST' => [
        '/article/create' => [ArticlesController::class, 'create'],
        '/reference/create' => [ReferencesController::class, 'create'],
        '/tag/create' => [TagsController::class, 'create'],

        '/article/update' => [ArticlesController::class, 'update'],
        '/reference/update' => [ReferencesController::class, 'update'],
        '/tag/update' => [TagsController::class, 'update'],

        '/article/upload_article' => [ArticlesController::class, 'uploadArticle'],
        '/reference/upload_reference' => [ReferencesController::class, 'uploadReference']


    ]
];

Connector::init(
    $confDb['host'],
    $confDb['port'],
    $confDb['db'],
    $confDb['user'],
    $confDb['pass']
);

list($controllerClass, $action) = $mappingAction[$method][$urlPath];



$controller = new $controllerClass();
$controller->$action();
