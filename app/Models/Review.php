<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $table = 'reviews';
    
    protected $fillable = [
        'student_id',
        'tutor_id',
        'rating',
        'review',
    ];
    
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id')->withDefault();
    }
    
    public function tutor(): BelongsTo
    {
        return $this->belongsTo(Tutor::class, 'tutor_id')->withDefault();
    }
}
