<?php

namespace App\Controllers;

class PostsController
{
    public function show(string $slug)
    {
        dd(__METHOD__, $slug);
    }
}