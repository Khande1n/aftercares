<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF token to be sent with every post request -->
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('assets/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('assets/select2/select2.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/datatables/dataTables.bootstrap.css')}}">
    <!-- SweetAlert -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/sweetalert/sweetalert.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/css/AdminLTE.min.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link rel="stylesheet" href="{{asset('assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}"> -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('assets/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        @if(Auth::user()->role_id == '2')
              <a href="/adminDashboard" class="logo">
            @else
            	<a href="/home" class="logo">
           @endif
        
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>After</b>Cares</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>After</b>Cares</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a> -->
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('images/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                    <p>
                      {{Auth::user()->contact}}
                      <small>Member since {{Auth::user()->created_at}}</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->  
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->name}}</p>
              <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
          </div>
          <!-- search form -->
          <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
            	
            @if(Auth::user()->role_id == '2')
              <a href="/adminDashboard">
            @else
            	<a href="/home">
           @endif
           
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <li class="treeview">
              <a href="/newrequest/create">
                <i class="fa fa-edit"></i>
                <span>New Service Request</span>
              </a>
            </li>
            <!-- <li class="treeview">
              <a href="/rent">
                <i class="fa  fa-object-group"></i>
                <span>Rent AC</span>
              </a>
            </li> -->
            <li class="treeview">
              <a href="/profile">
                <i class="fa fa-user"></i>
                <span>Profile</span>
              </a>
            </li>
            <!-- <li><a href="/faqs"><i class="fa fa-book"></i> <span>FAQs</span></a></li> -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
            
 @yield('content')   
       

      <footer class="main-footer">
        <strong>AfterCares &copy; Copyright 2016.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src="{{asset('assets/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/datatables/dataTables.bootstrap.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('assets/select2/select2.full.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('assets/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('assets/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{asset('assets/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- SweetAlert -->
    <script src="{{asset('assets/sweetalert/sweetalert.min.js')}}"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{asset('assets/chartjs/Chart.min.js')}}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <!-- <script src="{{asset('assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script> -->
    <!-- <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script> -->
    
    <!-- CSRF token with every request -->
	<script type="text/javascript">
		$.ajaxSetup({
   			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
	</script>
	<script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    
    @yield('jquery')
    
  </body>
</html>
