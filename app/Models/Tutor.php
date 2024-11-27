<?php

namespace App\Models;

use App\Casts\Json;
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
        'subjects',
        'grades',
    ];
    
    protected $casts = [
        'education' => Json::class,
        'subjects' => Json::class,
        'grades' => Json::class,
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }
}
