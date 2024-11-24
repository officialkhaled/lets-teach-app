<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $table = 'reviews';
    
    protected $fillable = [
        'tutor_id',
        'student_id',
        'rating',
        'review',
    ];
    
    public function tutor(): BelongsTo
    {
        return $this->belongsTo(Tutor::class);
    }
    
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
