<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//login
Route::get('/', function () {
    return view('auth.login');
});
//auth routes
Auth::routes();
//admin dashboard
Route::get('/admin', 'AdminController@index');
//department
Route::resource('/department', 'DepartmentController');
Route::get('/delete/department/{department}', 'DepartmentController@destroy');
//doctor
Route::resource('/doctor', 'DoctorController');
Route::get('/delete/doctor/{doctor}', 'DoctorController@destroy');
//patient
Route::resource('/patient', 'PatientController');
Route::get('/delete/patient/{patient}', 'PatientController@destroy');
//nurse
Route::resource('/nurse', 'NurseController');
Route::get('/delete/nurse/{nurse}', 'NurseController@destroy');
//pharmacist
Route::resource('/pharmacist', 'PharmacistController');
Route::get('/delete/pharmacist/{pharmacist}', 'PharmacistController@destroy');
//labaratorist
Route::resource('/labaratorist', 'LabaratoristController');
Route::get('/delete/labaratorist/{labaratorist}', 'LabaratoristController@destroy');
//Accountant
Route::resource('/accountant', 'AccountantController');
Route::get('/delete/accountant/{accountant}', 'AccountantController@destroy');

