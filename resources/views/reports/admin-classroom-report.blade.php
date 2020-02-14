	<script>
    function searchBydate() {
      var search_first_date_ = document.getElementById('search_first_date').value;
      var search_last_date_   = document.getElementById('search_last_date').value;

      if(search_first_date_=='' || search_last_date_==''){
        alert('Select a period to continue!');
      }else{
        $.ajax({
            url: '/classroom/report?from_date='+search_first_date_+'&to_date='+search_last_date_+'&gettype=initialpage',
            type: "get", //send it through get method,
            success: function(data) {
              window.location.hash.replace('#', '');
              $("#main_interface_contaier").html('');
              $("#main_interface_contaier").html(data);
            },
            error:function(){
              alert("error");
            }
          });
      }
    }
  </script>


  <div class="col-md-12">
		<div class="x_panel">
		<div class="x_title">
		  <script type="text/javascript"></script>
		    <h2>Class Room <small>Report view </small></h2>
		    <ul class="nav navbar-right panel_toolbox">
		      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		      </li>
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
		        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		            <a class="dropdown-item" href="#">Settings 1</a>
		            <a class="dropdown-item" href="#">Settings 2</a>
		          </div>
		      </li>
		      <li><a onclick="clickCloseIcon();"><i class="fa fa-close"></i></a>
		      </li>
		    </ul>
		    <div class="clearfix"></div>
		  </div>
		  <div class="x_content table-responsive">
	  	<div style="display: inline-block;float: right;margin-bottom: 5px;">
  		From<input type="date" name="search_first_date" id="search_first_date" style="margin-right: 10px;margin-left: 10px;">
  		To<input type="date" name="search_last_date" id="search_last_date" style="margin-right: 10px;margin-left: 10px;">
  		<button class="btn btn-primary btn-sm" onclick="searchBydate();">Saerch</button>
        </div>
        <div style="width:100px;height: 100px;position: fixed;top: 25%;left: 40%;display: none;" id="preload"><img src="images/gif/loading1.gif">
        </div>
        <div id="data_table_container">

          @include('reports.pagination-classroom')

        </div>
        </div>
		</div>
	</div>

  