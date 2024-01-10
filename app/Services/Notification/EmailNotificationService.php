<?php

namespace App\Services\Notification;

use App\Dto\Notification\NotificationDto;
use App\Mail\LogInNotification;
use App\Services\Interfaces\SendNotificationServiceInterface;
use Illuminate\Support\Facades\Mail;

class EmailNotificationService implements SendNotificationServiceInterface
{
    public function send(NotificationDto $dto): void
    {
       $mail = new LogInNotification([
            'subject' => 'Log in notification',
            'body' => $dto->text,
            'title' => 'Log in MAIL'
       ]);

       Mail::to($dto->to)->send($mail);
       
    }
}