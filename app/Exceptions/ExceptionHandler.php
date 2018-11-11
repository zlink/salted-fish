<?php
/**
 * Created by PhpStorm.
 * User: danzel
 * Date: 2018/11/11
 * Time: 12:32
 */

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
        $env = 'production';
        if ($env != 'production') {
            return $this->failed($exception->getMessage());
        }

        $this->internalError();
    }
}