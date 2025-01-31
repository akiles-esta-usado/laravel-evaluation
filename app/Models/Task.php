<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    use HasFactory;

    /**
     * Attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'due_date',
        'created_by'
    ];

    protected $casts = [
        'due_date' => 'datetime',
    ];

    public function assigned_user(): BelongsTo
    {
        return $this->belongsTo(User::class, "assigned_to");
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, "created_by");
    }

    /**
     * Registers an user as the responsible for the task
     * @param \App\Models\User $user
     * @return void
     */
    public function assignTo(User $user)
    {
        $user->assigned_tasks()->save($this);
    }
}
