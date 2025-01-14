<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaskEvaluation extends Model
{
    protected $fillable = [
        'task_id',
        'rating',
        'feedback',
        'created_by'
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function creator(): belongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
