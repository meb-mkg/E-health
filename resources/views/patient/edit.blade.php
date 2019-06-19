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
            <div class="col-md-10" style="margin-top: 20px;margin-right: 30px;margin-left: 50px;">
            	<div class="card-deck">
            		<div class="card" style="border: 1px solid white;padding: 15px;  background-color: white; width: 80%;">
            			<div class="card-body">
            				<div class="card-text">
            					<form method="post" action="/patient/{{ $patient->id }}">
            						@csrf()
            						@method('PATCH')
             <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="uname">Username</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="username" class="form-control " required style="width:500px;  " value="{{ $patient->username }}">
            </div>   
            <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="email">E-mail</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="email" class="form-control " required style="width:500px;  " value="{{ $patient->email }}">
            </div>
            
            <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="phone">Phone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="phone" class="form-control" required style="width:500px;"  value="{{ $patient->phone }}">
            </div>
            <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="address">Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="address" class="form-control" required style="width:500px;"  value="{{ $patient->address }}">
            </div>
            <div class="form-inline" style="margin-bottom: 20px;">
                    <label for="bg">Blood Group</label>
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
                    <div class="form-group">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="update" value="Update" class="btn btn-primary  pull-center">
                    </div>
                    <div style="margin-left: -40px;">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <ul style="list-style-type: none">
                                    <li><button class="btn btn-danger">{{ $error }}</button></li></li>
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
