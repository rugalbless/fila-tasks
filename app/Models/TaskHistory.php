<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaskHistory extends Model
{
    protected $fillable = [
        'task_id',
        'action',
        'changed_by',
        'changed_at',
    ];
    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class, 'task_id');
    }


    public function changedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}
