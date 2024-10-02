<?php

Route::set([
    'get:home' => [HomeController::class, 'index'],
    'post:home' => [HomeController::class, 'create'],
    'get:home/lists' => [HomeController::class, 'list'],
]);

Route::set([
    'get:wish' => [HomeController::class, 'index'],
    'post:gnome' => [HomeController::class, 'create'],
    'get:wish/list' => [HomeController::class, 'list'],
]);