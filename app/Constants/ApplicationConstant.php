<?php

namespace App\Constants;

class ApplicationConstant
{
    const ADMIN = 'admin';
    const TUTOR = 'tutor';
    const STUDENT = 'student';
    
    const USER_TYPES = [
        self::ADMIN => 0,
        self::TUTOR => 1,
        self::STUDENT => 2,
    ];
}