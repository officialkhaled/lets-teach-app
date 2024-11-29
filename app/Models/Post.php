<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'posts';
    
    protected $fillable = [
        'student_id',
        'subjects',
        'grade',
        'from_date',
        'to_date',
        'budget',
        'status',
    ];
    
    protected $casts = [
        'subjects' => Json::class,
    ];
    
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
