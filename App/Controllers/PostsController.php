<?php

namespace App\Controllers;

class PostsController
{
    public function show(string $id)
    {
        dd(__METHOD__, $id);
    }
}