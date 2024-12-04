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
        'subject_ids',
        'grade_id',
        'description',
        'budget',
        'from_time',
        'to_time',
        'approval_status',
    ];
    
    protected $casts = [
        'subject_ids' => Json::class,
    ];
    
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    
    public function subjects(): BelongsToJson
    {
        return $this->belongsToJson(Tag::class, 'subject_ids', 'id');
    }
    
    public function grade(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'grade_id');
    }
}
