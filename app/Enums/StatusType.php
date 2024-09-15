<?php

namespace App\Enums;

enum StatusType: string
{
    case  STARTED = 'started';
    case  IN_PROGRESS = 'in progress';
    case  DONE = 'done';
}