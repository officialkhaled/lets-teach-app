<?php

namespace App\Models;

use App\Casts\Json;
use App\Traits\CommonBooted;
use App\Traits\StatusFilter;
use App\Traits\UpdateStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Staudenmeir\EloquentJsonRelations\Relations\BelongsToJson;

class Post extends Model
{
    use CommonBooted;
    use StatusFilter;
    use UpdateStatus;
    use HasJsonRelationships;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'job_id',
        'student_id',
        'subject_ids',
        'class_id',
        'medium_id',
        'gender_id', // 1: Any, 2: Male, 3: Female
        'tutoring_day_id',
        'tutoring_type_id', // 1: Home, 2: Online
        'salary',
        'from_time',
        'to_time',
        'location',
        'note',
        'status', // 0: Draft, 1: Approved, 2: Rejected, 3: Applied, 4: Assigned, 5: Confirmed, 6: Cancelled
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
}
