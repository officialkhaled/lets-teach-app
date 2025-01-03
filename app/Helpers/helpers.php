<?php

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

