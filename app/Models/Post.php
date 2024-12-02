<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Staudenmeir\EloquentJsonRelations\Relations\BelongsToJson;

class Post extends Model
{
    use HasJsonRelationships;
    
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
        'approval_status',
    ];
    
    protected $casts = [
        'subjects' => Json::class,
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    
    public function tags(): BelongsToJson
    {
        return $this->belongsToJson(Tag::class, 'subjects', 'id');
    }
    
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'grade');
    }
}
