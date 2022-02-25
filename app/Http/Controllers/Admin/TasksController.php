<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use Auth;
use DB;
use Brian2694\Toastr\Facades\Toastr;


class TasksController extends Controller
{
    public function taskHome()
    {
        $tasks = Task::all();
        return view('Profile.mytasks',compact('tasks'));
    }

    public function showTasks()
    {               
    //    $tasks = DB::table('task')->select('*')->join('project','project.id','task.project_id' )->get();
        // $tasks = Task::all();
        $tasks = DB::table('task')->select('*')->where('assign_to', '=', Auth::user()->id)->orderBy('updated_at', 'desc')->get();

        // $assin = DB::table('employee')->select('image')->where('id', '=', $tasks->assign)->get();

        // dd($assin);

        $projects = Project::select('id','project_name')->get();

        // dd($tasks);
        return view('Task/tasks', compact('tasks'));
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

        return back()->with(Toastr::success('Task has successfully created!','Success'));
        
    }


    public function noteUpdate(Request $request){
        $statusUpdate = Task::find($id);
        $statusUpdate->note = $request->note;
        $statusUpdate->save();

        return back()->with('success', 'Note has successfully update!');
    }
}
