<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
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
        $patients = Patient::all();
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email', 'unique:patients'],
            'password' => ['required', 'min:6'],
            'phone' => ['required', 'unique:patients'],
            'address' => ['required'],
            'sex' => ['required'],
            'dob' => ['required', 'date'],
            'bg' => ['required']
        ]);

        Patient::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'phone' => request('phone'),
            'address' => request('address'),
            'sex' => request('sex'),
            'birth_date' => request('dob'),
            'blood_group' => request('bg')
        ]);

        return redirect('/patient')->with('info', 'Patent Added Successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $patient = Patient::findOrFail($patient);
        return view('patient.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'address' => ['required'],
            'bg' => ['required']
        ]);

        $patient->username = request('username');
        $patient->email = request('email');
        $patient->phone = request('phone');
        $patient->address = request('address');
        $patient->blood_group = request('bg');

        $patient->save();

        return redirect('/patient')->with('info', 'Patient Updated Successfullt!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect('/patient')->with('info', 'Patient Deleted Successfuly!');
    }
}
