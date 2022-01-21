<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function addModule()
    {
        return view('Admin/Module/addmodule');
    }
    public function showModules()
    {
        return view('Admin/Module/showmodules');
    }
}
