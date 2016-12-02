<?php

namespace Ericlog\Handler;

/**
 * Class StreamHandler
 *
 * @package Ericlog\Handler
 */
class StreamHandler extends BaseHandler implements HandlerInterface
{
    /**
     * @var string
     */
    protected $logPath;

    private $resource;

    /**
     * StreamHandler constructor.
     *
     * @param string $logPath
     */
    public function __construct(string $logPath)
    {
        $this->logPath = $logPath;
    }

    /**
     * @param $message
     * @param $logLevel
     * @return mixed
     */
    public function write($message, $logLevel)
    {
        // TODO: Implement write() method.
        if (!is_readable($this->logPath)) {
            trigger_error("Logfile is not writable");
        }

        $this->resource = fopen($this->logPath, FILE_APPEND);

    }

    /**
     * Close the resource.
     */
    public function close()
    {
        fclose($this->resource);
    }

    /**
     * Close the resource on destruction.
     */
    public function __destruct()
    {
        $this->close();
    }

    /**
     * Close the resource on serialization. If the logger was injected into a class that gets serialized,
     * then the handle needs to be
     */
    public function __sleep()
    {
        $this->close();
    }
}
