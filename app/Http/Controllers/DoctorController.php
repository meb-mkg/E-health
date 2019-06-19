<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
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
         $doctors = Doctor::all();
         return view('doctor.index', ['doctors' => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new Doctor;
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email', 'unique:doctors'],
            'password' => ['required', 'min:6'],
            'phone' => ['required', 'unique:doctors'],
            'address' => ['required'],
            'dept_id' => ['required']
       ]);
        Doctor::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'phone' => request('phone'),
            'address' => request('address'),
            'department_id' => request('dept_id'),
            
       ]);

        return redirect('/doctor')->with('info', "Doctor Added Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        $doctor= Doctor::findOrFail($doctor);
        return view('doctor.show', ['doctor' => $doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'address' => ['required'],
       ]);
        
        $doctor->username = $request->username;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;

        $doctor->save();

        return redirect('/doctor')->with('info', "Doctor Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect('/doctor')->with('info', "Doctor Deleted Successfully!");
    }
}
