<?php

namespace App\Controllers;


use App\Util\Response;
use Flight;

class Controller
{
    use Response;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        // 垃圾代码，为了适应公司使用了session的api项目
        $sessionId = Flight::request()->query['session_id'];
        if ($sessionId !== null) {
            session_regenerate_id();
            session_id($sessionId);
        }
    }

}