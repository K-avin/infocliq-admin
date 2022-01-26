<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $table = "task";

    protected $fillable = [
        'task_name',
        'description',
        'task',
        'project_id',
        'module',
        'department',
        'task_type',
        'due_date',
        'assign',
        'assign_to',
        'duration_minutes',
        'duration_hours',
        'priority_level',
        'points',
        'attachment',
        'note',
        'status',
    ];
}
