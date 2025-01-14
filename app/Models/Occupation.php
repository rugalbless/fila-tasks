<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Occupation extends Model
{
    protected $fillable = [
      'name',
      'department_id',
    ];

    public function department(): BelongsTo
    {
     return $this->belongsTo(Department::class);
    }

    public function employees(): hasMany
    {
        return $this->hasMany(Employee::class);
    }
}
