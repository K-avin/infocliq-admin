<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;

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

        Module::create([
            'projectId'  =>  $input['projectId'],
            'moduleName'  =>  $input['moduleName'],
        ]);

        return back()->with('success', 'module has successfully ceeated!');
    }
}
