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
        'description',
        'budget',
        'from_time',
        'to_time',
        'status',
    ];
    
    protected $casts = [
        'subjects' => Json::class,
    ];
    
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
    
    public function grade(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'id', 'grade');
    }
}
