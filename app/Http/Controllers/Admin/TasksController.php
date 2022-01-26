<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use DB;


class TasksController extends Controller
{
    public function showTasks()
    {               
    //    $tasks = DB::table('project')->select('*')->join('task','project.id','=','task.project' )->get();
    $tasks = Task::all();
    // $projects = Project::select('id','project_name')->get();
    // $i = 0;
    $projects = Project::select('id','project_name')->get();
   
    foreach($projects as $project){
        $p_n[] = $project;
        // $i++;
    };
    // dd($p_n);
        return view('Task/tasks', compact('tasks','p_n'));
    }

    public function addTask()
    {
        return view('Task/addtask');
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

        
        // $image_path = $request->file('image')->store('public/apiProduct');

        if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $file_path = $request->file->storeAs('docTask', $filename, 'public');
        }
        $file_path = 'null';

        Task::create([
            'task_name'             => $input['task_name'],
            'description'           => $input['description'],
            'task'                  => $input['task'],
            'project_id'            => $input['project'],
            'module'                => $input['module'],
            'department'            => $input['department'],
            'task_type'             => $input['task_type'],
            'due_date'              => $input['due_date'],
            'assign_to'             => $input['assign_to'],
            'duration_minutes'      => $input['duration_minutes'],
            'duration_hours'        => $input['duration_hours'],
            'priority_level'        => $input['priority'],
            'points'                => $input['points'],
            'attachment'            => $file_path, 
        ]);

        return back()->with('success', 'Task has successfully ceeated!');
    }
}
