@extends('layouts.dashboard')

@section('content')
<section class="content-header" style="margin-bottom: 10px; margin-left: 30px;">
  <h1>
    <i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;
    Manage Pharmacist
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<div class="row justify-content-center" style="background-color: #f0f0f0;">
  <div class="col-md-10" style="margin-top: 20px;margin-right: 30px;margin-left: 50px; font-weight: lighter;">
    @if(session('info'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{ session('info') }}</strong>
    </div>
    @endif
    <div class="card-deck">
      <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
        <div class="card-body">
          <div class="card-text">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Department</th>
                  <th colspan="2">Action</th>
                </tr>
                @foreach($pharmacist as $pharmacist)
                <tr>
                  <td>{{ $pharmacist->username }}</td>
                  <td>{{ $pharmacist->email }}</td>
                  <td>{{ $pharmacist->phone }}</td>
                  <td>{{ $pharmacist->address }}</td>
                  <td>{{ $pharmacist->department->name }}</td>
                  <td><a href="/pharmacist/{{ $pharmacist->id }}/edit" class="btn btn-primary">Edit</a></td>
                  <td><a href="/delete/pharmacist/{{ $pharmacist->id }}" class="btn btn-danger" onClick="return myFunction()">Delete</a></td>
                </tr>
                @endforeach
              </table>
              <script>
                function myFunction() {
                  if(!confirm("Are You Sure to delete this?"))
                    event.preventDefault();
                }
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection