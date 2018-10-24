<?php

use app\controllers\IndexController;

$app->route('/', [IndexController::class, 'index']);