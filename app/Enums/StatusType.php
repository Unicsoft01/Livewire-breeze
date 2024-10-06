<?php

namespace App\Enums;

enum StatusType: string
{
    case  STARTED = 'started';
    case  IN_PROGRESS = 'in progress';
    case  DONE = 'done';

    public function color(): string {
        return match ($this) {
            self::STARTED => 'success',
            self::IN_PROGRESS => 'primary',
            self::DONE => 'info',
        };
    }
}