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
    
    const ADMIN_ROLE_ID = 0;
    const TUTOR_ROLE_ID = 1;
    const STUDENT_ROLE_ID = 2;
}