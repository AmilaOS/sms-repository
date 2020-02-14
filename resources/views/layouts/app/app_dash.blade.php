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

    <title>{{$title}}</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


  </head>

  <body class="nav-sm" style="color: black;" id="body_container_for_gif"> 
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
                  <li><a target="blank" style="display: none;" href="javascript:" id="hide_dash_icon_id"><div style="background-image: url('../images/icons/dashboard.png');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Dashboard <span class="fa fa-chevron-down"></span></a>

                    <a target="blank" href="javascript:" id="hide_menu_icon_id"><div style="background-image: url('../images/icons/menu.png');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Menu <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a target="blank"  href="/student"><div style="background-image: url('../images/icons/student.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Students <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a target="blank"  href="/lecture"><div style="background-image: url('../images/icons/classroom.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Lectures <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a target="blank"  href="/lecturer"><div style="background-image: url('../images/icons/teacher.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Teacher <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a target="blank"  href="/classroom"><div style="background-image: url('../images/icons/lecroom.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Class Room <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a target="blank" href="/lectureoperator"><div style="background-image: url('../images/icons/operator.svg');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Operator <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a target="blank" href="/invoice"><div style="background-image: url('../images/icons/payment.png');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Payments<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a target="blank" href="/cardmarking"><div style="background-image: url('../images/icons/cardmarking.png');background-size: cover; height:30px;width:30px;margin-top: 15px;margin-left: 15px;" style="font-size: 11px;" aria-hidden="true"></div> Card Marking <span class="fa fa-chevron-down"></span></a>
                  </li>
            
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

       <!-- top navigation -->
        <div class="top_nav" style="margin-left: 20px;">
            <div class="nav_menu" >
                <nav class="nav navbar-nav" >
                <ul class=" navbar-right" style="margin: 2px;padding:2px;margin-left: 65px;">
                  <li style="float: left;">
                    <a href="/Home">
                      <img style="width: 20px;width: 40px;border-radius: 50%;" src="../images/icons/cardmarking.png">
                    <span style="font-size: 15px;">EXAMPLE COMPANY (PVT)LTD.</span> 
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
                            <input id="serch_input" type="text" aria-label="Search" class="form-control w-75" placeholder="Search student..." style="width: 400px;">
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
      jQuery('#hide_dash_icon_id').bind('click',function(e){
        e.preventDefault();
        $("#menu_container_id").hide('hide');
        $("#dashboard_container_id").show('speed'); 
        // hide icon
        $("#hide_dash_icon_id").hide();
        $("#hide_menu_icon_id").show();
      });
      
      jQuery('#hide_menu_link').bind('click',function(e){
        e.preventDefault();
        $("#dashboard_container_id").show('speed');
        $("#menu_container_id").hide('speed'); 

        // hide icon
        $("#hide_menu_icon_id").hide();
        $("#hide_dash_icon_id").show();
      });
       jQuery('#hide_menu_icon_id').bind('click',function(e){
        e.preventDefault();
        $("#dashboard_container_id").hide('speed');
        $("#menu_container_id").show('speed');

        // hide icon
        $("#hide_menu_icon_id").hide();
        $("#hide_dash_icon_id").show();
      });

       $( document ).ready(function() {
          $("#serch_input").show().focus();
        });
  </script>
  
  <script>
    function searchBydateCharts(){
      var search_first_date_charts = document.getElementById('search_first_date_charts').value;
      var search_last_date_charts   = document.getElementById('search_last_date_charts').value;

      if(search_first_date_charts=='' || search_last_date_charts==''){
        alert('Select a period to continue!');
      }else{
        $.ajax({
            url: '/?start_date='+search_first_date_charts+'&end_date='+search_last_date_charts+'&gettype=initialpage',
            type: "get", //send it through get method,
            success: function(data) {
              
              $("#chart_cpntainer_").html('');
              $("#chart_cpntainer_").html(data);
            },
            error:function(){
              alert("error");
            }
          });
      }
    }
  </script>

  </body>
</html>
