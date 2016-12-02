<?php

namespace Ericlog;

use Ericlog\Handler\HandlerInterface;

/**
 * Class Logger
 *
 * @package Ericlog
 */
class Logger implements LoggerInterface
{
    /**
     * Log handlers.
     *
     * @var array
     */
    private $handlers = [];

    /**
     * Logger constructor.
     *
     * @param HandlerInterface $handler
     */
    public function __construct(HandlerInterface $handler)
    {
        $this->handlers[] = $handler;
    }

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function emergency(string $message, array $context = [])
    {
        // TODO: Implement emergency() method.
    }

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function alert(string $message, array $context = [])
    {
        // TODO: Implement alert() method.
    }

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function critical(string $message, array $context = [])
    {
        // TODO: Implement critical() method.
    }

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function error(string $message, array $context = [])
    {
        // TODO: Implement error() method.
    }

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function warning(string $message, array $context = [])
    {
        // TODO: Implement warning() method.
    }

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function notice(string $message, array $context = [])
    {
        // TODO: Implement notice() method.
    }

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function info(string $message, array $context = [])
    {
        // TODO: Implement info() method.
    }

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function debug(string $message, array $context = [])
    {
        // TODO: Implement debug() method.
    }

    /**
     * @param string $level
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function log(string $level, string $message, array $context = [])
    {
        // TODO: Implement log() method.
    }
}
