<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Employee extends Model
{
    protected $fillable = [
      'name',
      'code',
      'department_id',
      'occupation_id',
      'status',
      'created_by'
    ];
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function occupation(): BelongsTo
    {
        return $this->belongsTo(Occupation::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function taskFiles(): MorphMany
    {
        return $this->morphMany(TaskFile::class, 'uploader');
    }
}
