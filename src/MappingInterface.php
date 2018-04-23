<?php

namespace Bpa\Notifications;

use Bpa\Notifications\Handler\HandlerInterface;

/**
 * Mapping
 */
interface MappingInterface
{
    /**
     * @return string
     */
    public function getMessageClass();

    /**
     *
     * @return HandlerInterface[]
     */
    public function getHandler();
}
