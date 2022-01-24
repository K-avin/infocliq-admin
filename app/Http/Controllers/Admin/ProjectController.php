<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function addProject()
    {
        return view('Project/addproject');
    }
    public function showProjects()
    {
        $projects = Project::all();
        // dd($projects);
        return view('Project/showprojects', compact('projects'));
    }
    public function showDetails()
    {
        return view('Project/singleview');
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

        Project::create([
            'client_name'           =>  $input['client_name'],
            'mobile'                =>  $input['mobile_number'],
            'company_name'          =>  $input['company_name'],
            'address'               =>  $input['address'],
            'client_description'    =>  $input['client_description'],
            'project_name'          =>  $input['project_name'],
            'due_date'              =>  $input['due_date'],
            'total_cost'            =>  $input['total_cost'],
            'total_hours'           =>  $input['total_hours'],
            'status'                =>  $input['status'],
            'doc_link'              =>  $input['doc_link'],
            'developers'            =>  json_encode($input['developers']),
            'project_description'   =>  $input['project_description'],
        ]);

        return back()->with('success', 'project has successfully ceeated!');
    }
}
