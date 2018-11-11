<?php

namespace App\Exceptions;


use App\Util\Response;
use Exception;

class ExceptionHandler
{
    use Response;

    /**
     * @param Exception $exception
     * @return false|string
     * @throws Exception
     */
    public function __invoke(Exception $exception)
    {
        // todo:: 记录异常到日志
        if (config('app.env') != 'production') {
            return $this->failed($exception->getMessage());
        }

        $this->internalError();
    }
}