<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function addEmployee()
    {
        return view('Employees/addemploye');
    }
    public function showEmployees()
    {
        return view('Employees/showemployees');
    }
}
