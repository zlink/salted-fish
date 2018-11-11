<?php

namespace App\Util;

use Flight;

trait Response
{
    protected $statusCode = FoundationResponse::HTTP_OK;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return Response
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param $data
     * @param array $headers
     */
    public function respond($data, $headers = [])
    {
        Flight::response()->header($headers);
        Flight::json($data, $this->getStatusCode());
    }

    /**
     * @param $status
     * @param array $data
     * @param null $code
     * @return false|string
     */
    public function status($status, array $data, $code = null)
    {
        if ($code) {
            $this->setStatusCode($code);
        }

        $status = [
            'status' => $status,
            'code' => $this->getStatusCode()
        ];

        $data = array_merge($status, $data);
        $this->respond($data);
    }

    /**
     * @param $message
     * @param int $code
     * @param string $status
     * @return false|string
     */
    public function failed($message, $code = FoundationResponse::HTTP_BAD_REQUEST, $status = 'error')
    {
        return $this->setStatusCode($code)->message($message, $status);
    }

    /**
     * @param $message
     * @param string $status
     * @return false|string
     */
    public function message($message, $status = "success")
    {
        return $this->status($status, ['message' => $message]);
    }

    /**
     * @param string $message
     * @return false|string|void
     */
    public function internalError($message = "Internal Error!")
    {
        $this->failed($message, FoundationResponse::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @param string $message
     * @return false|string|void
     */
    public function created($message = "created")
    {
        $this->setStatusCode(FoundationResponse::HTTP_CREATED)->message($message);
    }

    /**
     * @param $data
     * @param string $status
     * @return false|string
     */
    public function success($data, $status = "success")
    {
        return $this->status($status, compact('data'));
    }

    /**
     * @param string $message
     * @return false|string|void
     */
    public function notFond($message = 'Not Fond!')
    {
        $this->failed($message, Foundationresponse::HTTP_NOT_FOUND);
    }
}