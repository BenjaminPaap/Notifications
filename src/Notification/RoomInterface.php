<?php

namespace Bpa\Notifications\Notification;

/**
 * Raum f�r Benachrichtigungen
 */
interface RoomInterface
{
    /**
     * @return string
     */
    public function getIdentifier();

    /**
     * @return string
     */
    public function getName();
}
