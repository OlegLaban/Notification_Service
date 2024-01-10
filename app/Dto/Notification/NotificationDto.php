<?php

namespace App\Dto\Notification;

class NotificationDto
{
    public function __construct(public string $to, public string $text)
    {
        
    }
}