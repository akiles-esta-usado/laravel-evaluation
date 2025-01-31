<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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
        'assigned_to',
        'created_by'
    ];

    protected $casts = [
        'due_date' => 'datetime',
    ];

    public function assignedUser()
    {
        return $this->belongsTo(User::class, "assigned_to");
    }

    public function author()
    {
        return $this->belongsTo(User::class, "created_by");
    }
}
