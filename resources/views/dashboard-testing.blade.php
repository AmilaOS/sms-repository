@extends('layouts.app.app_dash')
@section('content')

<script src="{{ asset('js/components/lectureoperator.js') }}" defer></script>
<script src="{{ asset('js/chrtjs/Chart.min.js') }}"></script>
<script src="{{ asset('js/chrtjs/utils.js') }}" ></script>
<!-- <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script> -->
  <!-- <script src="https://www.chartjs.org/samples/latest/utils.js"></script> -->
     <!-- page content -->
<div id="menu_container_id" class="right_col" role="main" style="display: none;">
   <div class="row" id="menu_tab_container_id">
    <div class="col-md-12 col-sm-12  ">
      <div class="x_panel">
        <div class="x_content">

          <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="reports-tab" data-toggle="tab" href="#reports" role="tab" aria-controls="home" aria-selected="true">Final Reports</a>
            </li>
<!--             <li class="nav-item">
              <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="profile" aria-selected="false">Search</a>
            </li> -->
           <!--  <li class="nav-item">
              <a class="nav-link" id="operations-tab" data-toggle="tab" href="#operations" role="tab" aria-controls="contact" aria-selected="false">Operations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="contact" aria-selected="false">Settings</a>
            </li> -->
          </ul>



          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="reports" role="tabpanel" aria-labelledby="reports-tab">

              @include('layouts.admin_panel.dashbord_tab_report') 
              <form>
               {{ csrf_field() }}
            </form>
              
            </div>
            <div class="tab-pane fade" id="operations" role="tabpanel" aria-labelledby="operations-tab">
              <!-- @include('layouts.admin_panel.dashbord_tab_operations')  -->
            </div>
            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
              <!-- @include('layouts.admin_panel.dashbord_tab_setting')  -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <button hidden="" id="gif_img_modal" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-keyboard="false" data-backdrop="static"></button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="text-align: center;top: 10%;">
  <div class="modal-dialog" style="background-color: transparent;border-style: none;">
    <div class="modal-content" style="background-color: transparent;border-style: none;">
      <div class="modal-body" style="background-color: transparent;border-style: none;">
       <img src="../images/gif/loading1.gif" style="width: 300px;height: 400px;">
       <button hidden="" type="button" class="btn btn-default" id="modal_close_button" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
  </div>

  <!-- Report View Area -->
  <div class="row" id="main_interface_contaier">
    <!-- @include('reports.admin-invoice-report') -->
    
  </div>
</div>



<script>

  function getPage(event){
    // body_container_for_gif
    // jQuery('#gif_img_modal').click();
    var requestedPageUrl = event.id;
    var page_url='';
    switch (requestedPageUrl) {
        case 'admin_invoice':
          page_url ="/invoice/report";
          break;
      case 'admin_earning':
          page_url ="/earning/report";
          break;
      case 'admin_classroom':
          page_url ="/classroom/report";
          break;
      case 'admin_lecture':
          page_url ="/lecture/report";
          break;
      case 'admin_salary':
          page_url ="/salary/report";
          break;
      case 'admin_student':
          page_url ="/student/report";
          break;
      case 'admin_systemuser':
          page_url ="/systemuser/report";
          break;
      case 'admin_teacher':
          page_url ="/teacher/report";
          break;
        default:
          
          break;
      }

    var from_date = "2019-12-12";
    var to_date = moment().format('YYYY-MM-DD');
     $.ajax({
          url: page_url+'?from_date='+from_date+'&to_date='+to_date+'&gettype=initialpage',
          type: "get", //send it through get method,
          success: function(data) {
            // jQuery('#modal_close_button').click();
            $("#main_interface_contaier").show("speed");
            $("#menu_tab_container_id").hide("speed");
            $("#main_interface_contaier").html(data);
          },
          error:function(){
            alert("error");
          }
        });


         $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
    
    $(document).ready(function()
    {
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
  
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
  
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
            document.getElementById('data_table_container').style.display="none";
            document.getElementById('preload').style.display="block";
            getData(page);
        });
  
    });
  
    function getData(page){
        $.ajax(
        {
            url: page_url+'?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $("#data_table_container").empty().html(data);
            location.hash = page;
            document.getElementById('data_table_container').style.display="block";
            document.getElementById('preload').style.display="none";
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
        
    }
  }

  function clickCloseIcon(){
    window.location.hash.replace('#', '');
    $("#main_interface_contaier").empty();
    $("#menu_tab_container_id").show("speed");

  }

</script>
<div id="chart_cpntainer_">
  @include('layouts.admin_panel.dashboard-charts')
</div>


<!-- footer content -->
@include('layouts.footer-admin') 
<!-- /footer content -->
@endsection