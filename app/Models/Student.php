<?php

namespace App\Models;

use App\Casts\Json;
use App\Traits\StatusFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Staudenmeir\EloquentJsonRelations\Relations\BelongsToJson;

/**
 * @property array|mixed $education
 * @property mixed $grade_ids
 */
class Student extends Model
{
    use StatusFilter;
    use HasJsonRelationships;

    protected $table = 'students';

    protected $fillable = [
        'user_id',
        'phone_number',
        'subject_ids',
        'grade_id',
    ];

    protected $casts = [
        'subject_ids' => Json::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function subjects(): BelongsToJson
    {
        return $this->belongsToJson(Tag::class, 'subject_ids');
    }
}
