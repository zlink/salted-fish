<?php
/**
 * Created by PhpStorm.
 * User: danzel
 * Date: 2018/10/25
 * Time: 00:14
 */

namespace app\controllers;

class IndexController extends Controller
{
    public function show()
    {
        return $this->message('hello world');
    }
}