<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $departments = Department::all();
        return view('department.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**

     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department;
        request()->validate([
            'name' => ['required', 'min:2', 'unique:departments'],
            'desc' => ['required', 'min:5']
       ]);
        Department::create([
            'name' => request('name'),
            'description' => request('desc')
       ]);

        return redirect('/department')->with('info', "Department Added Successfully!");

    }

    public function show(Department $department)
    {
        $department = Department::findOrFail($department);
        return view('department.show', ['department' => $department]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        request()->validate([
            'name' => ['required', 'min:2'],
            'desc' => ['required', 'min:5']
        ]);
        
        $department->name = $request->name;
        $department->description = $request->desc;

        $department->save();

        return redirect('/department')->with('info', "Department Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect('/department')->with('info', "Department Deleted Successfully!");
    }
}
