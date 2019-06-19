<?php

namespace App\Http\Controllers;

use App\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
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
        $nurses = nurse::all();
        return view('nurse.index', ['nurses' => $nurses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nurse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nurse = new Nurse;
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email', 'unique:nurses'],
            'password' => ['required', 'min:6'],
            'phone' => ['required', 'unique:nurses'],
            'address' => ['required'],
            'dept_id' => ['required']
        ]);
        nurse::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'phone' => request('phone'),
            'address' => request('address'),
            'department_id' => request('dept_id'),
            
        ]);

        return redirect('/nurse')->with('info', "Nurse Added Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function show(Nurse $nurse)
    {
        $nurse= Nurse::findOrFail($nurse);
        return view('nurse.show', ['nurse' => $nurse]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function edit(Nurse $nurse)
    {
        return view('nurse.edit', compact('nurse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nurse $nurse)
    {
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'address' => ['required'],
        ]);
        
        $nurse->username = $request->username;
        $nurse->email = $request->email;
        $nurse->phone = $request->phone;
        $nurse->address = $request->address;

        $nurse->save();

        return redirect('/nurse')->with('info', "Nurse Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nurse $nurse)
    {
        $nurse->delete();
        return redirect('/nurse')->with('info', "Nurse Deleted Successfully!");
    }
}
