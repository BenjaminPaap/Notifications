<?php

namespace Bpa\Notifications\Handler;

use Bpa\Notifications\Notification\MessageInterface;

/**
 * Notification Handler
 */
interface HandlerInterface
{
    /**
     * @param MessageInterface $message
     *
     * @return bool
     */
    public function notify(MessageInterface $message);
}
