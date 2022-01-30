<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $table = "project";

    protected $fillable = [
        'client_name',
        'mobile',
        'company_name',
        'address',
        'client_description',
        'project_name',
        'start_date',
        'due_date',
        'total_cost',
        'total_hours',
        'status',
        'project_logo',
        'doc_link',
        'developers',
        'project_description',
    ];
}
