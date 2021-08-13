<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
         $displayDept = Department::all();
        return view('department.index', compact('displayDept'));
    }
    //
    public function saveAllDept(Request $request)
    {
        $request->validate([
            'deptName'=>'required|max:191'
        ]);
        $dept = new Department;

        $dept->departmentName=$request->deptName;
        $dept->save();
        return response()->json(['message'=>'Department Added Successfully'], 200);
    }

    public function getAllDept()
    {
        $depts = Department::all();
        return response()->json(['All Departments'=>$depts]);
    }

    public function getAllDeptById($id)
    {
        $deptsItem = Department::find($id);
        if($deptsItem)
        {
            return response()->json(['Searched Department'=>$deptsItem]);
        }
        else{
            return response()->json(['message'=>'Department not found'], 404);
        }

    }

    public function updateAllDeptById(Request $request, $id)
    {
        $request->validate([
            'deptName'=>'required|max:191'
        ]);
        $dept = Department:: find($id);
        if($dept){

            $dept->departmentName=$request->deptName;
            $dept->update();
            return response()->json(['message'=>'Department Updated Successfully'], 200);
        }else
        {
            return response()->json(['message'=>'Department Not Found'], 404);
        }

    }

    public function deleteDeptById($id)
    {
        $deletedDept = Department::find($id);
        if($deletedDept)
        {
            $deletedDept->delete();
            return response()->json(['message'=>'Department Deleted Successfully'], 200);
        }
        else{
            return response()->json(['message'=>'Department Not Found'], 404);
        }
    }
}
