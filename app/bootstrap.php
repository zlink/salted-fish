<?php

use Dotenv\Dotenv;
use Dotenv\Exception\ValidationException;
use flight\Engine;

define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'app');

require ROOT_PATH . '/vendor/autoload.php';

try {
    (new Dotenv(ROOT_PATH))->load();
} catch (ValidationException $exception) {
    //
}

$app = new Engine();

try {
    $app->register('config', function () {
        return ['config' => ''];
    });
} catch (Exception $e) {

}

try {
    $app->map('auth', function (){
        return 123555;
    });
} catch (Exception $e) {
    var_dump($e);
}

$app->after('auth', function () {
    echo 'auth after';
});

require APP_PATH . '/routes.php';

return $app;