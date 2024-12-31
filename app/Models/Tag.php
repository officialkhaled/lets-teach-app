<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tag extends Model
{
    public const CLASS = 1;
    public const SUBJECT = 2;
    
    public const TYPE = [
        1 => 'Class',
        2 => 'Subject',
    ];
    
    public const CLASSES = [
        1 => 'Class 1',
        2 => 'Class 2',
    ];
    
    public const SUBJECTS = [
        1 => 'Physics',
        2 => 'Chemistry',
    ];
    
    protected $table = 'tags';
    
    protected $fillable = [
        'name',
        'type',
        'status',
    ];
    
    public function grade(): HasOne
    {
        return $this->hasOne(Student::class, 'grade_id');
    }
    
    public function grades(): HasOne
    {
        return $this->hasOne(Student::class, 'grade_ids');
    }
}
