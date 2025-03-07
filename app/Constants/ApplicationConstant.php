<?php

namespace App\Constants;

class ApplicationConstant
{
    const SUPER_ADMIN = 'super-admin';
    const ADMIN = 'admin';
    const TUTOR = 'tutor';
    const STUDENT = 'student';

    const USER_TYPES = [
        self::ADMIN => 0,
        self::TUTOR => 1,
        self::STUDENT => 2,
    ];

    const MEDIUMS = [
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
        11 => 'ICT',
    ];

    const GENDERS = [
        1 => 'Any',
        2 => 'Male',
        3 => 'Female',
    ];

    const TUTORING_TYPE = [
        1 => 'Online',
        2 => 'Home',
    ];

    const TUTORING_DAYS = [
        1 => '1 Day/Week',
        2 => '2 Days/Week',
        3 => '3 Days/Week',
        4 => '4 Days/Week',
        5 => '5 Days/Week',
        6 => '6 Days/Week',
        7 => '7 Days/Week',
    ];
}
