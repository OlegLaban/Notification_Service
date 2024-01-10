<?php

namespace App\Services\Interfaces;

use App\Dto\Notification\NotificationDto;
use App\Enums\NotificationTypeCases;

interface NotificationServiceInterface
{
    public function send(NotificationTypeCases $type, NotificationDto $dto): void;
}