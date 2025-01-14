<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class TaskComments extends Model
{
    protected $fillable = [
        'task_id',
        'comment',
        'commentable_id',
        'commentable_type',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class, 'task_id');
    }

    public function author(): MorphTo
    {
        return $this->morphTo('commentable');
    }
}
