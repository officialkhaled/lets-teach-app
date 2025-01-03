<?php

namespace App\Models;

use App\Traits\StatusFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tag extends Model
{
    use StatusFilter;
    
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
