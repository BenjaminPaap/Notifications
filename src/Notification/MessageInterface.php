<?php

namespace Bpa\Notifications\Notification;

/**
 * Nachricht f�r eine Benachrichtigung
 */
interface MessageInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @return RoomInterface
     */
    public function getRoom();
}
