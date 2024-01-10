<?php

namespace App\Services\Interfaces;

use App\Dto\Notification\NotificationDto;

interface SendNotificationServiceInterface
{
    public function send(NotificationDto $notificationDto): void;
}