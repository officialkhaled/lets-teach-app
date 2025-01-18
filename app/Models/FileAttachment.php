<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class FileAttachment extends Model
{
    use SoftDeletes;

    protected $table = 'file_attachments';

    protected $fillable = [
        'file_attachmentable_id',
        'file_attachmentable_type',
        'name',
        'path'
    ];

    protected $appends = ['file', 'full_path'];

    public function getFileAttribute()
    {
        return $this->attributes['path'] ?? '';
    }

    public function getFullPathAttribute(): string
    {
        $path = data_get($this->attributes, 'path', '');
        return asset('storage/' . $path);
    }

    public function file_attachmentable(): MorphTo
    {
        return $this->morphTo();
    }
}
