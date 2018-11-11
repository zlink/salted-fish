<?php

use App\Exceptions\ExceptionHandler;
use App\Exceptions\NotFoundExceptionHandler;
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

$app->map('error', new ExceptionHandler());
$app->map('notFound', new NotFoundExceptionHandler());

require APP_PATH . '/routes.php';

return $app;