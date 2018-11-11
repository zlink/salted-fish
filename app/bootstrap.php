<?php

use App\Exceptions\ExceptionHandler;
use App\Exceptions\NotFoundExceptionHandler;
use Dotenv\Dotenv;
use Dotenv\Exception\ValidationException;
use flight\Engine;

define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'app');

require ROOT_PATH . '/vendor/autoload.php';

// 加载.env文件，用于自动区分运行环境
try {
    (new Dotenv(ROOT_PATH))->load();
} catch (ValidationException $exception) {
    //
}

$app = new Engine();

// 注册异常处理
$app->map('error', new ExceptionHandler());
$app->map('notFound', new NotFoundExceptionHandler());

// 加载系统配置
$app->register('config', function () {

});

//加载日志处理组件
$app->register('log', function () {

});

//加载缓存组件
$app->register('cache', function () {

});

//加载orm组件
$app->register('db', function () {

});

// 加载路由
require APP_PATH . '/routes.php';

return $app;