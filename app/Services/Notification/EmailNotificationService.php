<?php

namespace App\Services\Notification;

use App\Dto\Notification\NotificationDto;
use App\Mail\LogInNotification;
use App\Services\Interfaces\SendNotificationServiceInterface;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;

class EmailNotificationService implements SendNotificationServiceInterface
{
    public function send(NotificationDto $dto): void
    {
       $mail = new LogInNotification([
            'subject' => 'Log in notification',
            'body' => 'You had login in some account',
            'title' => 'Log in MAIL'
       ]);

       Mail::to($dto->email)->send($mail);
       
    }
}