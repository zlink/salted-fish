<?php

define('APP_START', microtime());

$app = require '../app/bootstrap.php';

$app->start();