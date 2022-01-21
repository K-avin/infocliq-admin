<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function addProject()
    {
        return view('Project/addproject');
    }
    public function showProjects()
    {
        return view('Project/showprojects');
    }
    public function showDetails()
    {
        return view('Project/singleview');
    }
    
}
