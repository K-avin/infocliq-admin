<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Project;

class ModuleController extends Controller
{
    public function addModule()
    {
        return view('Module/addmodule');
    }
    public function showModules()
    {
        return view('Module/showmodules');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $modules = Module::all()->count();

        Module::create([
            'projectId'  =>  $input['projectId'],
            'moduleName' =>  $input['moduleName'],
        ]);

        return back()->with('success', 'module has successfully ceeated!');
    }
}
