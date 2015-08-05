<?php

$router->get('/', function () {
    return view('index');
});

$router->resource('/post', 'Post\PostController');