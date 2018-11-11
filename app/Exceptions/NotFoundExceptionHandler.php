<?php
/**
 * Created by PhpStorm.
 * User: danzel
 * Date: 2018/11/11
 * Time: 12:38
 */

namespace App\Exceptions;


use App\Util\Response;

class NotFoundExceptionHandler
{
    use Response;

    public function __invoke()
    {
        echo $this->notFond();
    }
}