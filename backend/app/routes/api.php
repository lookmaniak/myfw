<?php

Route::set([
    'get:posts' => [PostController::class, 'index'],
    'post:posts' => [PostController::class, 'create'],
]);