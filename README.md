Send notifications to different configured handlers at once.

# Installation

```shell
$ composer require bpa/notifications
```

# Usage

Create a room to which your messages should be sent:

```php
class DeveloperRoom implements RoomInterface
{
    public function getIdentifier()
    {
        return 'developer-room';
    }
    
    public function getName()
    {
        return 'Room for developers'; 
    }
} 
```

Create a message type:

```php
class UrgentDeveloperMessage implements MessageInterface
{
    public function getTitle() 
    {
        return null;
    }
    
    public function getMessage()
    {
        return 'There is an urgent task waiting to be done';
    }
    
    public function getRoom()
    {
        return new DeveloperRoom();
    }
}
```

# Handlers

Currently there is only a single handler. But more are to come. I would 
love to see some contributions for other chat tools like Slack, Hipchat,
IRC or others.

 - Stride: [bpa/notifications-stride](https://github.com/bpa/)

# Contribution
