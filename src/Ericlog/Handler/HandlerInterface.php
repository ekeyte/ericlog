<?php

namespace Ericlog\Handler;

/**
 * Interface HandlerInterface
 *
 * @package Ericlog\Handler
 */
interface HandlerInterface
{
    /**
     * @param $message
     * @param $logLevel
     * @return mixed
     */
    public function write($message, $logLevel);

    /**
     * @return mixed
     */
    public function close();
}
