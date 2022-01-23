<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function addEmployee()
    {
        return view('Employees/addemploye');
    }
    public function showEmployees()
    {
        $employees = Employee::all();
        // dd($employees);
        return view('Employees/showemployees', compact('employees'));
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

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $image_path = $request->image->storeAs('imgEmployee', $filename, 'public');
        }

        Employee::create([
            'first_name'    =>  $input['firstname'],
            'last_name'     =>  $input['lastname'],
            'nic_number'    =>  $input['nic'],
            'mobile_number' =>  $input['mobile'],
            'provence'      =>  $input['provence'],
            'district'      =>  $input['district'],
            'city'          =>  $input['city'],
            'address'       =>  $input['address'],
            'gender'        =>  $input['gender'],
            'status'        =>  $input['status'],
            'date_of_birth' =>  $input['dob'],
            'image'         =>  $image_path,
            'designation'      =>  $input['designation'],
            'department'    =>  $input['department'],
            'employment_status' =>  $input['estatus'],
            'start_date'    =>  $input['startdate'],
            'salary'        =>  $input['salary'],
            'bank'          =>  $input['bank'],
            'branch'        =>  $input['branch'],
            'account_name'  =>  $input['accountname'],
            'account_number'=>  $input['accountnumber'],
        ]);

        return ["result" => $image_path];
    }
}
