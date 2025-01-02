<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait CommonBooted
{
    public static function booted(): void
    {
        static::creating(function ($model) {
            if (auth()->check()) {
                if (in_array('created_by', $model->getFillable())) {
                    $model->created_by = auth()->user()->id;
                }
            }
        });
        
        static::updating(function ($model) {
            if (auth()->check()) {
                if (in_array('updated_by', $model->getFillable())) {
                    $model->updated_by = auth()->user()->id;
                }
            }
        });
        
        static::deleting(function ($model) {
            if (auth()->check()) {
                if (!$model->deleted_by && in_array('deleted_by', $model->getFillable())) {
                    $model->deleted_by = auth()->user()->id;
                }
                $model->save();
            }
        });
    }
    
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, "created_by", "id")->withDefault();
    }
    
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, "updated_by", "id")->withDefault();
    }
    
    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, "deleted_by", "id")->withDefault();
    }
}
