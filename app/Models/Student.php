<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $table = 'students';
    
    protected $fillable = [
        'user_id',
        'phone_number',
        'description',
        'subjects',
        'grade',
    ];
    
    protected $casts = [
        'subjects' => Json::class,
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }
}
