<?php
$router->add('post', ['controller' => 'PostController', 'action' => 'index', 'method' => 'GET']);
$router->add('posts/{slug:\D+}',
    ['controller' => \App\Controllers\PostsController::class, 'action' => 'show', 'method' => 'GET']
);


