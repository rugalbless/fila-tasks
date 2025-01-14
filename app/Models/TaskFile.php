<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class TaskFile extends Model
{
    protected $fillable = [
        'task_id',
        'file_path',
        'uploaded_by'
    ];


    public function uploader(): MorphTo
    {
        return $this->morphTo();
    }


    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
