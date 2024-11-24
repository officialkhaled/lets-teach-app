<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'posts';
    
    protected $fillable = [
        'student_id',
        'subject',
        'class',
        'schedule',
        'budget',
        'tags',
    ];
    
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
