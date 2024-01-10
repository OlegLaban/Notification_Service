<?php

namespace App\Enums;

use Othyn\PhpEnumEnhancements\Traits\EnumEnhancements;

enum NotificationTypeCases: string {
    use EnumEnhancements;
    
    case email = 'email';
}