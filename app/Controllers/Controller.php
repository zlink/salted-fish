<?php

namespace App\Controllers;


use App\Util\Response;
use Flight;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class Controller
{
    use Response;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $sessionId = Flight::request()->query['session_id'];
        if ($sessionId !== null) {
            session_regenerate_id();
            session_id($sessionId);
        }
    }

    public function auth()
    {
        throw new \Exception('login');
    }
}