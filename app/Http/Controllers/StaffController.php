<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Department;

class StaffController extends Controller
{
    //

    function create($id)
    {
       
        $department = Department::findOrFail($id);
        $departments = Department::all();
        return view('departments.staffcreate', ['department' => $department, 'departments' => $departments]);
    }

    function store(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'department' => 'required',
                'designation' => 'required',

            ]
        );
        
        $addstaff = new Staff();
        $addstaff->name = $request->title;
        $addstaff->email = $request->email;
        $addstaff->phone = $request->phone;
         $addstaff->department_id = $request->department; 
        $addstaff->designation = $request->designation;

        if ($addstaff->save()) {

            return redirect('admin/staffbydepartment/' . $id)
                ->with('success', 'staff created successfully!');
        }
        return redirect()->back()
            ->with('error', 'Failed to create staff. Please try again.');

    }

    function edit($id)
    {
        $staff = Staff::with('department')->findOrFail($id);

        return view('departments.staffedit', ['staffs' => $staff]);
    }

    function update(Request $request, $id)
    {

        $staff = Staff::findOrFail($id);

        $staff->name = $request->title;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->designation = $request->designation;

        if ($staff->save()) {
            return redirect('admin/staffbydepartment/' . $staff->department_id)->with('success', 'staff updated successfully!');
        }

        return redirect()->back()->with('error', 'Failed to update room.');

    }

    function destroy($id)
    {

        $stafffind = Staff::findOrFail($id);

        if (!$stafffind) {
            return redirect('admin/staffbydepartment/' . $stafffind->department_id)->with('error', "error in delete");
        }

        $stafffind->delete();
        return redirect('admin/staffbydepartment/' . $stafffind->department_id)->with("success", "delete sucess");

    }
}
