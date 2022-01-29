<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $table = "employee";

    protected $fillable = [
        'first_name',
        'last_name',
        'nic_number',
        'mobile_number',
        'provence',
        'district',
        'city',
        'address',
        'gender',
        'image',
        'status',
        'date_of_birth',
        'designation',
        'department',
        'employment_status',
        'start_date',
        'salary',
        'bank',
        'branch',
        'account_name',
        'account_number',

    ];
}
