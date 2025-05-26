<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Staff;

class DepartmentController extends Controller
{
    //
    function index(){
       $getDepartments= Department::all();
       return view('adminlayout',['datas'=>$getDepartments]);

    }



    function show($id){

        $department = Department::findOrFail($id);
        $staffs = $department->staffs()->paginate(10);
         
        
          return view('departments.departmentstaff', [ 'departments' => $department,
        'staffs' => $staffs]);
    }
}
