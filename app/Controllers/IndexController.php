<?php
/**
 * Created by PhpStorm.
 * User: danzel
 * Date: 2018/10/25
 * Time: 00:14
 */

namespace App\Controllers;

class IndexController extends Controller
{
    public function show()
    {
        echo $data['index'];
        return $this->success('hello world');
    }
}