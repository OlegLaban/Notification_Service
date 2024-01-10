<?php

namespace App\Dto\Notification;

class NotificationDto
{
    public function __construct(public string $email, public string $text)
    {
        
    }
}