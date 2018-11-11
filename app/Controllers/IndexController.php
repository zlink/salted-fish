<?php

namespace App\Controllers;

class IndexController extends Controller
{
    public function show()
    {
        return $this->success('hello world');
    }
}