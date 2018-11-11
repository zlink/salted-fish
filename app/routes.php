<?php

use App\Controllers\IndexController;

$app->route('/', [new IndexController(), 'show']);
