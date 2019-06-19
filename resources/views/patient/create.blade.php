@extends('layouts.dashboard')

@section('content')
<section class="content-header" style="margin-bottom: 10px; margin-left: 30px;">
      <h1>
        <i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;
        Manage Patients
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  <div class="row justify-content-center" style="background-color: #f0f0f0;">
    <div class="col-sm-12" style="margin-top: 20px;margin-right: 30px;margin-left: 50px;">
      <div class="row">
        <div class="col-sm-4">
          <h3><a href="/patient">Patient List</a></h3>
        </div>
        <div class="col-sm-8">
          <h3><a href="/patient/create" class="btn btn-primary"><span class="fa fa-plus"></span> Add Patient </a></h3>
        </div>
      </div>

      <div class="card-deck">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white; width: 95%;">
          <div class="card-body">
            <div class="card-text">
              <form method="post" action="/patient">
                @csrf()
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="uname">Username</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="username" class="form-control " value="{{ old('username') }}" required style="width:500px; ">
            </div>
            <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="email">E-mail</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="email" class="form-control " value="{{ old('email') }}" required style="width:500px; ">
            </div>
            
              <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="pass">Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}" required style="width:500px;">
            </div>
            <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="phone">Phone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required style="width:500px;">
            </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="address">Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="address" class="form-control" value="{{ old('address') }}" required style="width:500px;">
            </div>
            <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="sex">Sex</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="sex" class="form-control" class="form-control" value="{{ old('sex') }}" required style="width:500px;">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
            </div>
            <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="dob">Birth Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" required style="width:500px;">
            </div>
            <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="bg">Blood Group</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="bg" class="form-control" class="form-control" value="{{ old('bg') }}" required style="width:500px;">
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option><option>A+</option>
                      <option>AB+</option>
                      <option>AB-</option>
                      <option>O+</option>
                      <option>O-</option>
                    </select>
            </div>
                  </div>
                </div>
                
            
            <div class="form-group" style="margin-bottom: 20px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="submit" name="add" value="Add Patient" class="btn btn-primary  pull-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div style="margin-left: -40px;">
              @if($errors->any())
              @foreach($errors->all() as $error)
              <ul style="list-style-type: none">
                <li>
                  <button class="btn btn-danger">{{ $error }}</button>
                </li>
              </ul>
              @endforeach
              @endif
            </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      <div>
      </div>
    </div>
  </div>
  @endsection