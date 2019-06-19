<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-health</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all-colors.min.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/images/mit.jpg') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <span class="logo-mini"><b>EH</b></span>
      <span class="logo-lg"><b>E-health</span>
    </a>
    <div class="main-panel">
      <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href=""><i class="fa fa-user"></i> Admin Panel</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Select Language<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li><li><a href="amharic.php">Amharic</a></li>
                <li><a href="#">Tigrigna</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Account<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#" class="dropdown-item">{{ Auth::user()->name }}</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i>Profile</a></li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="fa fa-power-off"></i> 
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  </li>

                  
                </ul>
              </li>
            </ul>
          </div>
      </nav>
    </div>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="active">
          <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/department">
            <i class="fa fa-files-o"></i>
            <span>Department</span>
          </a>
        <li>
          <a href="/doctor">
            <i class="fa fa-user-md"></i> <span>Doctor</span>
          </a>
        </li>
        <li>
          <a href="/patient">
            <i class="fa fa-user"></i> <span>Patient</span>
          </a>
        </li>
        <li>
          <a href="/nurse">
            <i class="fa fa-stethoscope"></i> <span>Nurse</span>
          </a>
        </li>
        <li>
          <a href="/pharmacist">
            <i class="fa fa-medkit"></i> <span>Pharmacist</span>
          </a>
        </li>
        <li>
          <a href="/labaratorist">
            <i class="fa fa-plus-square"></i> <span>Labaratorist</span>
          </a>
        </li>
        <li>
          <a href="/accountant">
            <i class="fa fa-user-circle"></i> <span>Accountant</span>
          </a>
        </li>
        <li>
          <a href="/hospital">
            <i class="fa fa-hospital-o"></i> <span>Monitor Hospital</span><!--fa-th-->
          </a>
        </li>
        <li>
          <a href="/settings">
            <i class="fa fa-gears"></i> <span>Settings</span>
          </a>
        </li>
        <li>
          <a href="/profile">
            <i class="fa fa-users"></i> <span>Profile</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    @yield('content')
  </div>


  <!-- footer -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>mebrahtukahsay7@gmail.com</b> 
    </div>
    <strong>Copyright &copy; 2018 <a href="#">MIT Ethiopia</a>.</strong> All rights
    reserved.
  </footer>
</div>

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<!-- Bootstrap  -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
</body>
</html>
