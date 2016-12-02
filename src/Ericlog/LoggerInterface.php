<?php

declare(strict_types=1);

namespace Ericlog;

/**
 * Interface LoggerInterface
 *
 * @package Ericlog
 */
interface LoggerInterface
{

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function emergency(string $message, array $context = array());

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function alert(string $message, array $context = array());

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function critical(string $message, array $context = array());

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function error(string $message, array $context = array());

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function warning(string $message, array $context = array());

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function notice(string $message, array $context = array());

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function info(string $message, array $context = array());

    /**
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function debug(string $message, array $context = array());

    /**
     * @param string $level
     * @param string $message
     * @param array  $context
     * @return mixed
     */
    public function log(string $level, string $message, array $context = array());

}
