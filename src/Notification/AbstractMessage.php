<?php

namespace Bpa\Notifications\Notification;

/**
 * Abstract message class
 */
abstract class AbstractMessage implements MessageInterface
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var RoomInterface
     */
    protected $room;

    /**
     * AbstractMessage constructor.
     *
     * @param RoomInterface $room
     * @param string        $message
     * @param string        $title
     */
    public function __construct(RoomInterface $room, $message = null, $title = null)
    {
        $this->message = $message;
        $this->room = $room;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return RoomInterface
     */
    public function getRoom()
    {
        return $this->room;
    }
}
