<?php

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