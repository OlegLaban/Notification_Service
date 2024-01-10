<?php

namespace App\Http\Controllers\Notification;

use App\Dto\Notification\NotificationDto;
use App\Enums\NotificationTypeCases;
use App\Exceptions\NotificationMethodNotFound;
use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationSendRequest;
use App\Services\Notification\NotificationService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class NotificationController extends Controller
{
    public function send(NotificationSendRequest $request, NotificationService $notificationService): JsonResponse
    {
        try {
            $dto = new NotificationDto(
                email: $request->input('email'),
                text: $request->input('text')
            );
            
            $notificationService->send(NotificationTypeCases::email, $dto);
        } catch(NotificationMethodNotFound) {
            return response()->json([], Response::HTTP_BAD_REQUEST);
        }

        return response()->json(['sendStatus' => 'ok']);
    }
}