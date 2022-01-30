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
    public function showDetails($id)
    {
        $project = Project::find($id);
        // dd($project);
        return view('Project/singleview', compact('project'));
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

        if ($request->hasFile('project_logo')) {
            $filename = $request->project_logo->getClientOriginalName();
            $image_path = $request->project_logo->storeAs('logoProject', $filename, 'public');
        }

        Project::create([
            'client_name'           =>  $input['client_name'],
            'mobile'                =>  $input['mobile_number'],
            'company_name'          =>  $input['company_name'],
            'address'               =>  $input['address'],
            'client_description'    =>  $input['client_description'],
            'project_name'          =>  $input['project_name'],
            'start_date'            =>  $input['start_date'],
            'due_date'              =>  $input['due_date'],
            'total_cost'            =>  $input['total_cost'],
            'total_hours'           =>  $input['total_hours'],
            'status'                =>  $input['status'],
            'doc_link'              =>  $input['doc_link'],
            'project_logo'          =>  $image_path,
            'developers'            =>  json_encode($input['developers']),
            'project_description'   =>  $input['project_description'],
        ]);

        return back()->with('success', 'project has successfully ceeated!');
    }

    public function editProject($id){
        $project = Project::find($id);
        return view('Project/edit', compact('project'));
    }

    public function update(Request $request, $id){
        $projectUpdate = Project::find($id);
        $projectUpdate->update($request->all());

        return back()->with('success', 'project has successfully ceeated!');
    }

    public function updateStatus(Request $request){
        $statusUpdate = Project::find($id);
        $statusUpdate->status = $request->status;
        $statusUpdate->save();

        return back()->with('success', 'project has successfully started!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();   
        return back()->with('success', 'Project has successfully deleted!'); 
    }
}
