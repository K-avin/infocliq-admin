<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Module;
use App\Models\Task;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class ProjectController extends Controller
{
    public function addProject()
    {
        $developers = Employee::where('role','=', 'developer')->get();
// dd($developers);
        return view('Project/addproject',compact('developers'));
    }
    public function showProjects()
    {
        $projects = Project::all();

        // $modules = DB::table('project')
        // ->select('*')
        // ->join('module','module.projectId','=','project.id')
        // ->get();

        // dd($modules);

        $allModules = Module::all();

        foreach ($projects as $project){
           $countById = count(Module::where('projectId','=', $project->id)->get());
        
         $modules[] = 
         [
             'moduleCount' => $countById,
             'projectId'   => $project->id
        ];

                //   $allModules = json_decode(json_encode($modules),true);
    }

        // dd($modules);

        // $moduleCount = count($modules);
        // dd($moduleCount);
        

        // dd($all);

        return view('Project/showprojects', compact('projects','modules','allModules'));
    }
    public function showDetails($id)
    {
        $project = Project::find($id);

        $modules = Module::all();

        $tasks = Task::all();
        // dd($all);
        return view('Project/singleview', compact('project','modules','tasks'));
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

        return back()->with(Toastr::success('Successfully Created!','Project'));
    }

    public function editProject($id){
        $project = Project::find($id);
        $dev = Employee::where('role','=', 'developer')->get();
        return view('Project/edit', compact('project','dev'));
    }

    public function update(Request $request, $id){
        $projectUpdate = Project::find($id);
        $projectUpdate->update($request->all());

        return back()->with(Toastr::success('Successfully update!','Project'));
    }

    public function updateStatus(Request $request)
    {
        $projectStatus = Project::find($request->id);
        $projectStatus->status = $request->status;
        $projectStatus->save();
  
        return back()->with(Toastr::success('Successfully changed!','Status'));
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
        return back()->with(Toastr::success('Successfully deleted!','Project'));

    }
}
