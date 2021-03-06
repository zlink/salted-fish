<?php

if (!function_exists('dump')) {
    function dump($vars, $label = '', $return = false)
    {
        if (ini_get('html_errors')) {
            $content = "<pre>\n";
            if ($label != '') {
                $content .= "<strong>{$label} :</strong>\n";
            }
            $content .= htmlspecialchars(print_r($vars, true));
            $content .= "\n</pre>\n";
        } else {
            $content = $label . " :\n" . print_r($vars, true);
        }
        if ($return) {
            return $content;
        }
        echo $content;
        return null;
    }
}

if (!function_exists('config')) {
    function config($key, $default = null)
    {

    }
}

if (!function_exists('request')) {
    function request($key, $default = null)
    {
        return Flight::request();
    }
}

if (!function_exists('response')) {
    function response()
    {
        return Flight::response();
    }
}