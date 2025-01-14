<?php

namespace NotificationChannels\Fcm\Resources;

enum Visibility: string
{
    case VISIBILITY_UNSPECIFIED = 'PRIVATE';
    case VISIBILITY_PRIVATE = 'PRIVATE';
    case VISIBILITY_PUBLIC = 'PUBLIC';
    case VISIBILITY_SECRET = 'SECRET';
}
