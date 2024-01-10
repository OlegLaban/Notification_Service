<?php

namespace App\Services\Notification;

use App\Dto\Notification\NotificationDto;
use App\Enums\NotificationTypeCases;
use App\Exceptions\NotificationMethodNotFound;
use App\Services\Interfaces\NotificationServiceInterface;
use App\Services\Notification\EmailNotificationService;


class NotificationService implements NotificationServiceInterface
{
    public function __construct(private EmailNotificationService $emailNotificationService)
    {
        
    }

    public function send(NotificationTypeCases $type, NotificationDto $dto): void
    {
        switch ($type) {
            case NotificationTypeCases::email:
                $this->emailNotificationService->send($dto);
                break;
            default:
                throw new NotificationMethodNotFound('Notification method not found');
                break;
        }
    }
}