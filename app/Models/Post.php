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
        'job_id',
        'title',
        'medium_id',
        'preferred_tutor_id',
        'salary',
        'tutoring_day_id',
        'from_time',
        'to_time',
        'location',
        'status',
    ];
    
    protected $casts = [
        'subject_ids' => Json::class,
    ];
    
    protected static function boot(): void
    {
        parent::boot();
        
        static::creating(function ($job) {
            $monthInitials = ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'];
            
            $prefix = $monthInitials[now()->month - 1] ?? 'X';
            
            $job->job_id = sprintf(
                '%s%s%03d',
                $prefix,
                now()->format('dmy'),
                random_int(0, 999)
            );
        });
    }
    
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
    
    public function medium(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'medium_id');
    }
    
    public function preferredTutor(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'preferred_tutor_id');
    }
    
    public function tutoringDay(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'tutoring_day_id');
    }
}
