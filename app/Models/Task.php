<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{

    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'due_date',
        'created_by',
        'assigned_to',
    ];


    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'assigned_to');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function comments(): hasMany
    {
        return $this->hasMany(TaskComments::class, 'task_id');
    }

    public function evaluations(): hasMany
    {
        return $this->hasMany(TaskEvaluation::class, 'task_id');
    }

    public function files(): HasMany
    {
        return $this->hasMany(TaskFile::class, 'task_id');
    }

    public function history(): HasMany
    {
        return $this->hasMany(TaskHistory::class, 'task_id');
    }
}
