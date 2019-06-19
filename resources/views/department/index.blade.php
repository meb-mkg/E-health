@extends('layouts.dashboard')

@section('content')
<section class="content-header" style="margin-bottom: 10px; margin-left: 30px;">
      <h1>
        <i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;
        Manage Department
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  <div class="row justify-content-center" style="background-color: #f0f0f0;">
    <div class="col-md-10" style="margin-top: 20px;margin-right: 30px;margin-left: 50px; font-weight: lighter;">
      <div class="row">
        <div class="col-sm-4">
          <h3><a href="/department" class="text-info">Department List</a></h3>
        </div>
        <div class="col-sm-8">
          <h3><a href="{{ url('/department/create') }}" class="btn btn-info"><span class="fa fa-plus"></span> Add Department </a></h3>
        </div>
      </div>
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
            <th>Departmant Name</th>
            <th>Description</th>
            <th colspan="2">Action</th>
          </tr>
          @foreach($departments as $department)
          <tr>
            <td>{{ $department->name }}</td>
            <td>{{ $department->description }}</td>
            <td><a href="/department/{{ $department->id }}/edit" class="btn btn-primary">Edit</a></td>
            <td><a href="/delete/department/{{ $department->id }}" class="btn btn-danger" onClick="return myFunction()">Delete</a></td>
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