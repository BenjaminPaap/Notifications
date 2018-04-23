<?php

namespace Bpa\Notifications\Notification;

/**
 * Raum für Benachrichtigungen
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
