<?php

namespace App\Http\Controllers;

use App\Accountant;
use Illuminate\Http\Request;

class AccountantController extends Controller
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
         $accountants = Accountant::all();
         return view('accountant.index', ['accountants' => $accountants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accountant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accountant = new Accountant;
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email', 'unique:accountants'],
            'password' => ['required', 'min:6'],
            'phone' => ['required', 'unique:accountants'],
            'address' => ['required']
            //'dept_id' => ['required']
       ]);
        Accountant::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'phone' => request('phone'),
            'address' => request('address')
            //'department_id' => request('dept_id'),
            
       ]);

        return redirect('/accountant')->with('info', "Accountant Added Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accountant  $accountant
     * @return \Illuminate\Http\Response
     */
    public function show(Accountant $accountant)
    {
        $accountant= Accountant::findOrFail($accountant);
        return view('accountant.show', ['accountant' => $accountant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accountant  $accountant
     * @return \Illuminate\Http\Response
     */
    public function edit(Accountant $accountant)
    {
        return view('accountant.edit', compact('accountant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accountant  $accountant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accountant $accountant)
    {
        request()->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
       ]);
        
        $accountant->username = $request->username;
        $accountant->email = $request->email;
        $accountant->phone = $request->phone;
        $accountant->address = $request->address;

        $accountant->save();

        return redirect('/accountant')->with('info', "Accountant Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accountant  $accountant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accountant $accountant)
    {
        $accountant->delete();
        return redirect('/accountant')->with('info', "Accountant Deleted Successfully!");
    }
}
