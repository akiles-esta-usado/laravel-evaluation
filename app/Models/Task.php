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

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, "assigned_to");
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, "created_by");
    }

    public function assign_to(User $user)
    {
    }
}
