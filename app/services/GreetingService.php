<?php

namespace app\services;

class GreetingService
{
    public static function say($name)
    {
        return printf('[ %s ] good night! %s ...', date('Y-m-d H:i:s'), $name);
    }
}