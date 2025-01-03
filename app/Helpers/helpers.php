<?php

use Carbon\Carbon;

const SUCCESS = 200;
const FAIL = 500;

const ACTIVE = 1;
const INACTIVE = 0;
const APPLIED = 1;
const ASSIGNED = 1;
const CONFIRMED = 1;
const CANCELLED = 1;

const YES = 1;
const NO = 0;

const SEND = 1;

/**
 * get Current User object
 */
if (!function_exists('currentUser')) {
    function currentUser()
    {
        if (Auth::check()) {
            return Auth::user();
        }
        
        return null;
    }
}

/**
 * get Current User's ID
 */
function userId()
{
    if (Auth::check()) {
        return Auth::user()->id;
    }
    
    return null;
}

/**
 * get Current User's Name
 */
if (!function_exists('userName')) {
    function userName(): string
    {
        if (Auth::check()) {
            return auth()->user()->name;
        }
        
        return '';
    }
}

if (!function_exists('getPercentage')) {
    function getPercentage($first_num, $second_num): float|int
    {
        if ($second_num != 0) {
            return ($first_num * 100) / $second_num;
        }
        
        return 0;
    }
}

if (!function_exists('getPercentageOf')) {
    function getPercentageOf($percentOf, $percent): float|int
    {
        return ($percentOf * $percent) / 100;
    }
}

if (!function_exists('dateFormatter')) {
    function dateFormatter($date, $format = 'jS M Y')
    {
        if ($date) {
            return Carbon::parse($date)->format($format);
        }
        return $date;
    }
}

if (!function_exists('timeFormatter')) {
    function timeFormatter($time, $format = 'h:i A')
    {
        if ($time) {
            return Carbon::parse($time)->format($format);
        }
        return $time;
    }
}

if (!function_exists('getMonthNameById')) {
    function getMonthNameById($monthId): ?array
    {
        $months = [
            1 => ['en' => 'January', 'bn' => 'জানুয়ারি'],
            2 => ['en' => 'February', 'bn' => 'ফেব্রুয়ারি'],
            3 => ['en' => 'March', 'bn' => 'মার্চ'],
            4 => ['en' => 'April', 'bn' => 'এপ্রিল'],
            5 => ['en' => 'May', 'bn' => 'মে'],
            6 => ['en' => 'June', 'bn' => 'জুন'],
            7 => ['en' => 'July', 'bn' => 'জুলাই'],
            8 => ['en' => 'August', 'bn' => 'আগস্ট'],
            9 => ['en' => 'September', 'bn' => 'সেপ্টেম্বর'],
            10 => ['en' => 'October', 'bn' => 'অক্টোবর'],
            11 => ['en' => 'November', 'bn' => 'নভেম্বর'],
            12 => ['en' => 'December', 'bn' => 'ডিসেম্বর']
        ];
        
        return $months[$monthId] ?? null;
    }
}

