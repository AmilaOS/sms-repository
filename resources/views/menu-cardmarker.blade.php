<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <style>
* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
  </head>

  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!-- <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div> -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  
                  <li><a href="/cardmarking"><div style="background-image: url('../images/icons/cardmarking.png');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Card Marking <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="/markerreports"><div style="background-image: url('../images/icons/payment.png');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Marking Reports<span class="fa fa-chevron-down"></span></a>
                  </li>
            
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
               
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item" style="padding-left: 40px;padding-top: 10px;">
                      <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         var xxx = confirm('Are you sure?');
                         if(xxx){
                          document.getElementById('logout-form').submit();
                        } ">         
                          {{ __('Logout') }}
                      <i class="fa fa-sign-out pull-right"></i></a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                  </li>
                  <li class="nav-item" style="padding-left: 20px;">
                    <img  src="../images/icons/teacher.svg" style="width: 40px;height: 40px; margin-right: 10px;border-radius: 50%;border-style: solid;border-width: thin;border-color: #DDDBDA;" alt="">{{ Auth::user()->name }}
                  </li>
                  <li  class="nav-item" style="padding-left: 20px;">
                      <!-- <input type="text" class="form-control" placeholder="Search student..." style="width: 300px;"> -->
                       <form class="form-inline">
                            <input type="text" aria-label="Search" class="form-control w-75" placeholder="Search student..." style="width: 400px;">
                            <i style="font-size: 20px;margin-left: 5px;" class="fa fa-search" aria-hidden="true"></i>
                        </form>

                  </li>
  
                  <!-- <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                    </ul>
                  </li> -->
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="bs-docs-section">
                   
                      <div class="bs-glyphicons">
                        <ul class="bs-glyphicons-list">
                          <a href="/cardmarking">
                         <li style="margin: 24px; height:165px;width:150px;color: white;">
                            <div style="background-image: url('../images/icons/cardmarking.png');background-size: cover; height:100px;width:100px;margin-top: 15px;margin-left: 15px;" style="font-size: 80px;" aria-hidden="true"></div>
                            <span class="glyphicon-class" style="font-size: 14px;margin-top: 10px; color:black;">Card Marking</span>
                          </li>
                        </a>

                         <a href="/markerreports">
                         <li style="margin: 24px; height:165px;width:150px;color: white;">
                            <div style="background-image: url('../images/icons/progress.png');background-size: cover; height:100px;width:100px;margin-top: 15px;margin-left: 15px;" style="font-size: 80px;" aria-hidden="true"></div>
                            <span cla
                          ss="glyphicon-class" style="font-size: 14px;margin-top: 10px; color:black;">Marking Reports</span>
                          </li>
                        </a>

                        </ul>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>