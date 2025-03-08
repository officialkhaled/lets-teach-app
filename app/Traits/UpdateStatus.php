<?php

namespace App\Traits;

trait UpdateStatus
{
    // Instance methods: Call these on a single model instance
    public function approve()
    {
        return $this->update(['status' => APPROVED]);
    }

    public function reject()
    {
        return $this->update(['status' => REJECTED]);
    }

    public function apply()
    {
        return $this->update(['status' => APPLIED]);
    }

    public function assign()
    {
        return $this->update(['status' => ASSIGNED]);
    }

    public function confirm()
    {
        return $this->update(['status' => CONFIRMED]);
    }

    public function cancel()
    {
        return $this->update(['status' => CANCELLED]);
    }

    // Query Scopes: Call these on a query to update multiple records
    public function scopeApprove($query)
    {
        return $query->where('id', $this->id)->update(['status' => APPROVED]);
    }

    public function scopeReject($query)
    {
        return $query->where('id', $this->id)->update(['status' => REJECTED]);
    }

    public function scopeApply($query)
    {
        return $query->where('id', $this->id)->update(['status' => APPLIED]);
    }

    public function scopeAssign($query)
    {
        return $query->where('id', $this->id)->update(['status' => ASSIGNED]);
    }

    public function scopeConfirm($query)
    {
        return $query->where('id', $this->id)->update(['status' => CONFIRMED]);
    }

    public function scopeCancel($query)
    {
        return $query->where('id', $this->id)->update(['status' => CANCELLED]);
    }
}
