<?php

namespace App\Http\Controllers;

use App\Pharmacist;
use Illuminate\Http\Request;

class PharmacistController extends Controller
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
         $pharmacists = Pharmacist::all();
         return view('pharmacist.index', ['pharmacists' => $pharmacists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pharmacist = new Pharmacist;
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email', 'unique:pharmacists'],
            'password' => ['required', 'min:6'],
            'phone' => ['required', 'unique:pharmacists'],
            'address' => ['required'],
            'dept_id' => ['required']
       ]);
        Pharmacist::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'phone' => request('phone'),
            'address' => request('address'),
            'department_id' => request('dept_id'),
            
       ]);

        return redirect('/pharmacist')->with('info', "Pharmacist Added Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pharmacist  $Pharmacist
     * @return \Illuminate\Http\Response
     */
    public function show(Pharmacist $Pharmacist)
    {
        $pharmacist= Pharmacist::findOrFail($pharmacist);
        return view('pharmacist.show', ['pharmacist' => $pharmacist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pharmacist  $Pharmacist
     * @return \Illuminate\Http\Response
     */
    public function edit(Pharmacist $pharmacist)
    {
        return view('pharmacist.edit', compact('pharmacist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pharmacist  $Pharmacist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pharmacist $pharmacist)
    {
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'address' => ['required'],
       ]);
        
        $pharmacist->username = $request->username;
        $pharmacist->email = $request->email;
        $pharmacist->phone = $request->phone;
        $pharmacist->address = $request->address;

        $pharmacist->save();

        return redirect('/pharmacist')->with('info', "Pharmacist Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pharmacist  $Pharmacist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pharmacist $pharmacist)
    {
        $pharmacist->delete();
        return redirect('/pharmacist')->with('info', "Pharmacist Deleted Successfully!");
    }
}
