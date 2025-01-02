<?php

namespace App\Traits;

trait StatusFilter
{
    public function scopeActive($query)
    {
        return $query->where('status', 1);
//        return $query->where('status', ACTIVE);
    }
}
