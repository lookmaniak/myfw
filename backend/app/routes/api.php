<?php

Route::set([
    'get:home' => [HomeController::class, 'index'],
    'post:home' => [HomeController::class, 'create'],
    'get:home/list' => [HomeController::class, 'list'],
]);