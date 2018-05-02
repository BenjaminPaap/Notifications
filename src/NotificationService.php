<?php

namespace Bpa\Notifications;

use Bpa\Notifications\Handler\HandlerInterface;
use Bpa\Notifications\Notification\MessageInterface;

/**
 * Notification Service
 */
class NotificationService implements HandlerInterface
{
    /**
     * @var array|HandlerInterface[]
     */
    private $handlers = [];

    /**
     * Add a message mapping
     *
     * @param MappingInterface $mapping
     */
    public function addMapping(MappingInterface $mapping)
    {
        $class = $mapping->getMessageClass();

        if (false === isset($this->mapping[$class])) {
            $this->mapping[$class] = [];
        }

        $this->mapping[$class][] = $mapping;
    }

    /**
     * @param HandlerInterface $handler
     */
    public function addHandler(HandlerInterface $handler)
    {
        $this->handlers[] = $handler;
    }

    /**
     * @param MessageInterface $message
     *
     * @return bool
     */
    public function notify(MessageInterface $message)
    {
        $success = true;

        foreach ($this->handlers as $handler) {
            $handlerResult = $handler->notify($message);

            if (is_bool($result)) {
                $success &= $result;
            }
        }

        return $success;
    }
}
