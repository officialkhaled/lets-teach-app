<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Staudenmeir\EloquentJsonRelations\Relations\BelongsToJson;

/**
 * @property array|mixed $education
 * @property mixed $subjects
 * @property mixed $grades
 * @property mixed $user
 * @property mixed $id
 */
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
    
    public function subjectTags(): BelongsToJson
    {
        return $this->belongsToJson(Tag::class, 'subjects', 'id');
    }
    
    public function gradeTags(): BelongsToJson
    {
        return $this->belongsToJson(Tag::class, 'grades', 'id');
    }
}
