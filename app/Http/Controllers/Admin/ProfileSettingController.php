<?php

namespace App\Http\Controllers\Admin;
use App\Models\Employee;
use Auth;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileSettingController extends Controller
{
    public function profile()
    {
        $profileDetails = Employee::where('nic_number','=' , Auth::user()->employee)->first();
        $achimentPoints = DB::table('task')->select(DB::raw('SUM(task.points) as points'))->where('assign_to', '=', $profileDetails->id)->where('status', '=', 'completed')->first();
        $getDev = DB::table('project')->select('developers')->get();
        // $projectsbyUser = DB::table('project')->select(DB::raw('project_name','start_date'))->where('developers', '=',[$profileDetails->id])->first();
        // foreach($getDev as $dev){
        //     $dev;
        //     dd( $dev);
        // };
        // dd( $getDev);
        return view('Profile/profile', compact('profileDetails','achimentPoints'));
    }
    
}
