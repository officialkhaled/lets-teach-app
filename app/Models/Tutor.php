<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tutor extends Model
{
    protected $table = 'tutors';
    
    protected $fillable = [
        'user_id',
        'phone_number',
        'bio',
        'experience',
        'education',
        'skills',
        'tags',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }
}
