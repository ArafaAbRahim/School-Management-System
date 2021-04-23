<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sikkha</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('dash-assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('dash-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('dash-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('dash-assets/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dash-assets/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dash-assets/dist/css/adminlte.css') }}">
  <link rel="stylesheet" href="{{ asset('dash-assets/dist/css/bootstrap.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('dash-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('dash-assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('dash-assets/plugins/summernote/summernote-bs4.min.css') }}">
  @livewireStyles
</head>

<body>
    <div class="wrapper">
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">           
                <img src="{{asset('assets/img/logo/logo.png')}}" />
            </a>
            <!-- Main Sidebar Container -->        
            <div class="sidebar"> 

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('dash-assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    
                    </div>
                </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Dashboard -->
                    <li class="nav-item menu-open">
                        <a href="{{route('admin.dashboard')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                            Dashboard            
                            </p>
                        </a>
                    </li> 
                    <!-- Admission -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>
                            Admission
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Admission</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Today Admission</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Admission</p>
                                </a>
                            </li>           
                        </ul>
                    </li>
                    <!-- Teacher -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                            Teachers
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.addteacher')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Teacher</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Class Teacher</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="{{route('admin.teacher')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Teachers List</p>
                                </a>
                            </li>           
                        </ul>
                    </li>
                    <!-- Student -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                            Students
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.addstudent')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Student</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.adduser')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Class-wise Students</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Students List</p>
                                </a>
                            </li>           
                        </ul>
                    </li> 
                    <!-- Class -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                            Class
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.class')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Classes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.section')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sections</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Subjects</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Exams</p>
                                </a>
                            </li>           
                        </ul>
                    </li> 
                    <!-- Result -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                            Result
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Class Test</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Half Yearly</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Final</p>
                                </a>
                            </li>           
                        </ul>
                    </li>
                    <!-- Librery -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book-open"></i>
                            <p>
                            Library
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.books')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Book List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pendding Book</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>History</p>
                                </a>
                            </li>           
                        </ul>
                    </li>
                    <!-- Attendence -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-hand-paper"></i>
                            <p>
                            Attendence
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Teachers Attendence</p>
                                    <i class="fas fa-angle-left right"></i>                 
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="fas fa-caret-right nav-icon"></i>
                                            <p>Take Attendence</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="fas fa-caret-right nav-icon"></i>
                                            <p>Monthly Attendence</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="fas fa-caret-right nav-icon"></i>
                                            <p>All Attendence</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Students Attendence</p>
                                    <i class="fas fa-angle-left right"></i> 
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="fas fa-caret-right nav-icon"></i>
                                            <p>Take Attendence</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="fas fa-caret-right nav-icon"></i>
                                            <p>Monthly Attendence</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="fas fa-caret-right nav-icon"></i>
                                            <p>All Attendence</p>
                                        </a>
                                    </li>
                                </ul>
                            </li> 
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Stafs Attendence</p>
                                </a>
                            </li>           
                        </ul>
                    </li>
                    <!-- Account -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                            Account
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student Fee</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Salary Pay</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Stafs Pay</p>
                                </a>
                            </li>           
                        </ul>
                    </li>
                    <!-- Hostel -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-house-user"></i>
                            <p>
                            Hostel
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Hostel Room</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student Sit</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student List</p>
                                </a>
                            </li>           
                        </ul>
                    </li>
                    <!-- Routine -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                            Routine
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Syllabus</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Class Routine</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Exam Routine</p>
                                </a>
                            </li>           
                        </ul>
                    </li>
                    <!-- Notice -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>
                            Notice
                            <i class="fas fa-angle-left right"></i>                
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Notice</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Notice</p>
                                </a>
                            </li>                      
                        </ul>
                    </li>                             

                    <li class="nav-header"><h5>OTHERS</h5></li>          
                    <!-- Gellary -->
                    <li class="nav-item">
                        <a href="pages/gallery.html" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                            Gallery
                            </p>
                        </a>
                    </li> 
                    <!-- Event -->
                    <li class="nav-item">
                        <a href="pages/gallery.html" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard"></i>
                            <p>
                            Events
                            </p>
                        </a>
                    </li>   
                    <!-- Calendar -->
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                            Academic Calendar              
                            </p>
                        </a>
                    </li>      
                    <!-- Mail-->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/mailbox/mailbox.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/compose.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/read-mail.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- User role -->
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-id-card"></i>
                            <p>
                            User Role               
                            </p>
                        </a>
                    </li>                                                         
                </ul>
                </nav>
            </div>
        </aside>


        <nav class="main-header navbar navbar-expand navbar-white">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>            

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                        </div>
                        
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                        <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                        <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    @if (Route::has('login'))                    
                        @auth
                            @if(Auth::user()->utype === 'ADM')                        
                                <a href="#" class="nav-link" data-toggle="dropdown" >My Account({{Auth::user()->name}})</a> 
                                <div class="dropdown-menu">                                                       
                                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>                                
                                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                                        @csrf                                                    
                                    </form>
                                </div>
                            @else
                                <a href="#" class="nav-link" data-toggle="dropdown" >My Account({{Auth::user()->name}})</a> 
                                <div class="dropdown-menu">                                                       
                                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>                                
                                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                                        @csrf                                                    
                                    </form>
                                </div>
                            @endif
                        @else
                            <ul>
                                <li><a href="{{ route('login') }}" title="Resister or login">Login</a></li>
                                <li><a href="{{ route('register') }}" title="Resister or login">Register</a></li>
                            </ul>                                                                                                                                                                                                                                                                                                                                 
                        @endauth    
                    @endif
                </li>
            </ul>
        </nav>

        {{$slot}}

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-rc
            </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    </div>

<!-- jQuery -->
<script src="{{ asset('dash-assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('dash-assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('dash-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('dash-assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('dash-assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('dash-assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('dash-assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('dash-assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('dash-assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('dash-assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('dash-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('dash-assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('dash-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dash-assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dash-assets/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dash-assets/dist/js/pages/dashboard.js') }}"></script>
@livewireScripts
</body>


</html>