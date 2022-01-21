<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function showTasks()
    {
        return view('Admin/Task/tasks');
    }

    public function addTask()
    {
        return view('Admin/Task/addtask');
    }
}
