<?php

namespace App\Traits;

trait StatusFilter
{
    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }
    
    public function scopeInactive($query)
    {
        return $query->where('status', INACTIVE);
    }
    
    public function scopeApplied($query)
    {
        return $query->where('status', APPLIED);
    }
    
    public function scopeAssigned($query)
    {
        return $query->where('status', ASSIGNED);
    }
    
    public function scopeConfirmed($query)
    {
        return $query->where('status', CONFIRMED);
    }
    
    public function scopeCancelled($query)
    {
        return $query->where('status', CANCELLED);
    }
}
