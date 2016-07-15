<?php

namespace App;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return null
     */
    public function log($level, $message, array $context = array())
    {
        // TODO: Implement log() method.
    }
}