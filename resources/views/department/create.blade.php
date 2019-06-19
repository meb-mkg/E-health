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
  <div class="col-sm-12" style="margin-top: 20px;margin-right: 30px;margin-left: 50px;">
    <div class="row">
      <div class="col-sm-4">
        <h3><a href="/department">Department List</a></h3>
      </div>
      <div class="col-sm-8">
        <h3><a href="/department/create" class="btn btn-primary"><span class="fa fa-plus"></span> Add Department </a></h3>
      </div>
    </div>

    <div class="card-deck">
      <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white; width: 80%;">
        <div class="card-body">
          <div class="card-text">
            <form method="post" action="/department">
              @csrf()
              <div class="form-group">
                <label for="name">Department Name</label>
                <div class="input-group">
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}" required style="width:500px; ">
                </div>
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <div class="input-group">
                  <input type="text" name="desc" class="form-control" value="{{ old('desc') }}" required style="width:500px; ">
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="add" value="Add Department" class="btn btn-primary  pull-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
  </div>
</div>
@endsection