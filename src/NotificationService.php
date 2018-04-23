<?php

namespace Bpa\Notifications;

use Bpa\Notifications\Handler\HandlerInterface;

/**
 * Notification Service
 */
class NotificationService implements HandlerInterface
{
    /**
     * @var array|MappingInterface[]
     */
    private $mapping;

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
     * @param MessageInterface $message
     *
     * @return bool
     */
    public function notify(MessageInterface $message)
    {
        $class = get_class($message);
        $success = true;

        if (false === isset($this->mapping[$class])) {
            throw new \Exception('There is no mapping registered for this type of message');
        }

        foreach ($this->mapping as $mapping) {
            if (is_a($message, $mapping->getMessageClass())) {
                foreach ($mapping->getHandler() as $handler) {
                    $success &= $handler->notify($message);
                }

                break;
            }
        }

        return $success;
    }
}
