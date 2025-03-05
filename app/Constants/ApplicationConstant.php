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

    const MEDIUM = [
        1 => 'Bangla Medium',
        2 => 'English Medium',
        3 => 'English Version',
    ];

    const CLASSES = [
        1 => 'Class 1',
        2 => 'Class 2',
        3 => 'Class 3',
        4 => 'Class 4',
        5 => 'Class 5',
        6 => 'Class 6',
        7 => 'Class 7',
        8 => 'Class 8',
        9 => 'Class 9',
        10 => 'Class 10',
        11 => 'Class 11',
        12 => 'Class 12',
    ];

    const SUBJECTS = [
        1 => 'English',
        2 => 'Bangla',
        3 => 'Mathematics',
        4 => 'Physics',
        5 => 'Chemistry',
        6 => 'Biology',
        7 => 'Commerce',
        8 => 'Economics',
        9 => 'Finance',
        10 => 'Higher Mathematics',
    ];

    const GENDERS = [
        1 => 'Male',
        2 => 'Female',
    ];

    const TUTORING_DAYS = [
        1 => '3 Days/Week',
        2 => '4 Days/Week',
        3 => '5 Days/Week',
        4 => '6 Days/Week',
    ];
}
