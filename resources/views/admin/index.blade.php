@extends('layouts.dashboard')

@section('content')
    <section class="content-header" style="margin-bottom: 10px; margin-left: 30px;">
      <h1>
        <i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;
        Admin Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  <div class="row" style="background-color: #f0f0f0;">
    <div class="card-deck" style="margin-top: 20px;margin-right: 30px;margin-left: 30px;">
      <div class="col-sm-2" style="font-size: 15px; margin-bottom: 25px;">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-user-md"></i><br>
            <a href="/doctor" class="card-text">Doctor</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-user"></i><br>
            <a href="/patient" class="card-text">Patient</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-stethoscope"></i><br>
            <a href="/nurse" class="card-text">Nurse</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-medkit"></i><br>
            <a href="/pharmacist" class="card-text">Pharmacist</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-plus-square"></i><br>
            <a href="/laboratorist" class="card-text">Laboratorist</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-user-circle"></i><br>
            <a href="/accountant" class="card-text">Accountant</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-hospital-o"></i><br>
            <a href="" class="card-text">Monitor Hospital</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-clock-o"></i><br>
            <a href="" class="card-text">Appointment</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-cc-visa"></i><br>
            <a href="" class="card-text">Payment</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-h-square"></i><br>
            <a href="" class="card-text">Blood Bank</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-ambulance"></i><br>
            <a href="" class="card-text">Medicine</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-file"></i><br>
            <a href="" class="card-percent">Operation Report</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-file-text"></i><br>
            <a href="" class="card-text">Birth Report</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-file"></i><br>
            <a href="" class="card-text">Death Report</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-bed"></i><br>
            <a href="" class="card-text">Bed Allotment</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-tablet"></i><br>
            <a href="" class="card-text">Noticeboard</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-gear"></i><br>
            <a href="" class="card-text">Settings</a>
          </div>
        </div>
      </div>
        <div class="col-sm-2" style="font-size: 17px; margin-bottom: 25px">
        <div class="card" style="border: 1px solid white;padding: 15px;  background-color: white;">
          <div class="card-body text-center"><br>
            <i class="fa fa-calendar"></i><br>
            <a href="" class="card-text">Calander</a>
          </div>
        </div>
        </div>

        
    </div>
  </div>
</div>
@endsection
  