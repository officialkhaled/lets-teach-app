<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Staudenmeir\EloquentJsonRelations\Relations\BelongsToJson;

class Tutor extends Model
{
    use HasJsonRelationships;

    protected $table = 'tutors';

    protected $fillable = [
        'user_id',
        'phone_number',
        'gender',
        'bio',
        'experience',
        'education',
        'subject_ids',
        'grade_ids',
    ];

    protected $casts = [
        'education' => Json::class,
        'subject_ids' => Json::class,
        'grade_ids' => Json::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function subjects(): BelongsToJson
    {
        return $this->belongsToJson(Tag::class, 'subject_ids', 'id');
    }

    public function grades(): BelongsToJson
    {
        return $this->belongsToJson(Tag::class, 'grade_ids', 'id');
    }
}
