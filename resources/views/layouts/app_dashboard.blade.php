<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>SMS | Operations</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


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
                  <li><a  href="/"><div style="background-image: url('../images/icons/home.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a  href="/student"><div style="background-image: url('../images/icons/student.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Students <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a  href="/lecture"><div style="background-image: url('../images/icons/classroom.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Lectures <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a  href="/lecturer"><div style="background-image: url('../images/icons/teacher.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Teacher <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a  href="/classroom"><div style="background-image: url('../images/icons/lecroom.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Class Room <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="/lectureoperator"><div style="background-image: url('../images/icons/operator.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Operator <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <!-- <li><a href="/invoice"><div style="background-image: url('../images/icons/payment.png');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Payments<span class="fa fa-chevron-down"></span></a>
                  </li> -->
                  <!-- <li><a href="/cardmarking"><div style="background-image: url('../images/icons/cardmarking.png');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Card Marking <span class="fa fa-chevron-down"></span></a>
                  </li> -->
            
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
                  <li style="float: left;">
                    <a href="/">
                      <img style="width: 40px;width: 40px;border-radius: 50%;" src="../images/icons/cardmarking.png">
                    <span style="font-size: 20px;">EXAMPLE COMPANY (PVT)LTD.</span> 
                    </a>   
                  </li>
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
        @yield('content')
        <!-- page content -->
       
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

  </body>
</html>
