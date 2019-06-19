<?php

namespace App\Http\Controllers;

use App\Labaratorist;
use Illuminate\Http\Request;

class LabaratoristController extends Controller
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
        $labaratorists = Labaratorist::all();
        return view('labaratorist.index', ['labaratorists' => $labaratorists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('labaratorist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $labaratorist = new Labaratorist;
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email', 'unique:labaratorists'],
            'password' => ['required', 'min:6'],
            'phone' => ['required', 'unique:labaratorists'],
            'address' => ['required'],
            'dept_id' => ['required']
        ]);
        Labaratorist::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'phone' => request('phone'),
            'address' => request('address'),
            'department_id' => request('dept_id'),
            
        ]);

        return redirect('/labaratorist')->with('info', "Labaratorist Added Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\labaratorist  $labaratorist
     * @return \Illuminate\Http\Response
     */
    public function show(Labaratorist $labaratorist)
    {
        $labaratorist= Labaratorist::findOrFail($labaratorist);
        return view('labaratorist.show', ['labaratorist' => $labaratorist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\labaratorist  $labaratorist
     * @return \Illuminate\Http\Response
     */
    public function edit(Labaratorist $labaratorist)
    {
        return view('labaratorist.edit', compact('labaratorist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\labaratorist  $labaratorist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Labaratorist $labaratorist)
    {
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'address' => ['required'],
        ]);
        
        $labaratorist->username = $request->username;
        $labaratorist->email = $request->email;
        $labaratorist->phone = $request->phone;
        $labaratorist->address = $request->address;

        $labaratorist->save();

        return redirect('/labaratorist')->with('info', "Labaratorist Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\labaratorist  $labaratorist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Labaratorist $labaratorist)
    {
        $labaratorist->delete();
        return redirect('/labaratorist')->with('info', "Labaratorist Deleted Successfully!");
    }
}
