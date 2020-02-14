

<div id="dashboard_container_id" class="right_col" role="main">
  <div class="row" style="display: inline;" >
    <div class="tile_count" style="margin: 5px;">
      <div class="col-lg-2 col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-dollar"></i> Total Income</span>
        @foreach($totalincomebydate as $u_info)
        <div class="count green" style="font-size: 25px;">{{number_format($u_info->invoice_amount,2)}}</div>
        @endforeach
        <span class="count_bottom"><i class="green">4% </i>2019/01/12 to 31/12</span>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Daily Run Rate</span>
        <div class="count green" style="font-size: 25px;">{{number_format($incomerunratebydate,2)}}</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Total Students</span>
        <div class="count green" style="font-size: 25px;">{{$totalstudentcount[0]->student_count}}</div>
        <span class="count_bottom"><i class="red"><i class="fa fa-sort-asc"></i>{{$totalleftstudentcount[0]->student_count}} </i> Left Students</span>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
        <div class="count green" style="font-size: 25px;">{{$malestudentcount}}</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
        <div class="count" style="font-size: 25px;">{{$femalestudentcount}}</div>
        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Teachers</span>
        <div class="count" style="font-size: 25px;">{{$teachercount}}</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div style="display: inline-block;float: right;margin-bottom: 5px;">
      From<input type="date" name="search_first_date_charts" id="search_first_date_charts" style="margin-right: 10px;margin-left: 10px;">
      To<input type="date" name="search_last_date_charts" id="search_last_date_charts" style="margin-right: 10px;margin-left: 10px;">
      <button class="btn btn-primary btn-sm" onclick="searchBydateCharts();">Saerch</button>
        </div>
  </div>
  
  <div class="row">
    <div class="col-md-8">
      <div class="x_panel">
        <div class="x_title">
          <script type="text/javascript"></script>
            <h2>Income Statistics <small>Dialy </small></h2>
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
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="demo-container" style="height:320px;margin-top: -25px;">
                <div style="width:90%" height="40vh" width="80vw">
                  <canvas id="income_chart"></canvas>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
      <div class="x_panel">
        <div class="x_title">
          <h2>Top Five Classes</h2>
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
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <ul class="list-unstyled top_profiles scroll-view">

        <?php $count1 = 0; ?>
          @foreach($topfivebylecture as $u_info)
        <li class="media event">
          <a class="pull-left border-aero profile_thumb">
            <i class="fa fa-dollar aero"></i>
          </a>
          <div class="media-body">
            <a class="title" href="#">{{ $u_info->invoice_lecture_title}}</a>
            <p><strong>{{ $u_info->total }}. </strong> {{ $topfivebyteacher[$count1]->lecturer_name}}</p>
            <p> <small>12 Sales Today</small>
            </p>
          </div>
        </li>
        <?php $count1+=1; ?>
          @endforeach

        </ul>
      </div>
        </div>
        </div>
      </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Top Five Income <small>- Class Wise</small></h2>
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
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Class/Lecture</th>
                    <th style="text-align:right;">Income</th>
                  </tr>
                </thead>
                <tbody>
                   <?php $count1 = 1; ?>
                   <?php $sum1 = 0; ?>
                  @foreach($topfivebylecture as $u_info)
                  <?php $sum1=$sum1+$u_info->total ?>
                  <tr>
                    <th scope="row">{{ $count1 }}</th>
                    <td>{{ $u_info->invoice_lecture_title}}</td>
                    <td style="text-align:right;">{{ $u_info->total }}</td>
                  </tr>
                  <?php $count1+=1; ?>
                  @endforeach
                  <!-- <strong>Bootom Five Total</strong>
                  <strong>{{ $sum1 }}</strong> -->
                </tbody>
              </table>

            </div>
          </div>
        </div>

         <div class="col-lg-4 col-md-6 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Top Five Income <small>- Teacher Wise</small></h2>
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
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Teacher</th>
                    <th style="text-align:right;">Income</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $count1 = 1; ?>
                  <?php $sum1 = 0; ?>
                  @foreach($topfivebyteacher as $u_info)
                  <?php $sum1=$sum1+$u_info->total ?>
                  <tr>
                    <th scope="row">{{ $count1 }}</th>
                    <td>{{ $u_info->lecturer_name}}</td>
                    <td style="text-align:right;">{{ $u_info->total }}</td>
                  </tr>
                  <?php $count1+=1; ?>
                  @endforeach
                  <!-- <strong>Bootom Five Total</strong>
                  <strong>{{ $sum1 }}</strong> -->
                </tbody>
              </table>

            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
          <div class="x_title">
            <h2>Device Usage</h2>
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
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table class="" style="width:100%">
              <tr>
                <th style="width:37%;">
                  <p>Top 5</p>
                </th>
                <th>
                  <div class="col-lg-7 col-md-7 col-sm-7 ">
                    <p class="">Device</p>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 ">
                    <p class="">Progress</p>
                  </div>
                </th>
              </tr>
              <tr>
                <td>
                  <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                </td>
                <td>
                  <table class="tile_info">
                    <tr>
                      <td>
                        <p><i class="fa fa-square blue"></i>IOS </p>
                      </td>
                      <td>30%</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square green"></i>Android </p>
                      </td>
                      <td>10%</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square purple"></i>Blackberry </p>
                      </td>
                      <td>20%</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square aero"></i>Symbian </p>
                      </td>
                      <td>15%</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square red"></i>Others </p>
                      </td>
                      <td>30%</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      </div>

      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Bottom Five Incomes <small>-Class Wise</small></h2>
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
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content table-responsive">
              <table class="table table-hover" style="color: #c15c5c;">
                <thead>
                 <tr>
                    <th>#</th>
                    <th>Class/Lecture</th>
                    <th style="text-align:right;">Income</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $count1 = 1; ?>
                  <?php $sum1 = 0; ?>
                  @foreach($bottomfivebylecture as $u_info)
                  <?php $sum1=$sum1+$u_info->total ?>
                  <tr>
                    <th scope="row">{{ $count1 }}</th>
                    <td>{{ $u_info->invoice_lecture_title}}</td>
                    <td style="text-align:right;">{{ $u_info->total }}</td>
                  </tr>
                  <?php $count1+=1; ?>
                  @endforeach
                  <!-- <strong>Bootom Five Total</strong>
                  <strong>{{ $sum1 }}</strong> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Bottom Five Incomes <small>-Teacher Wise</small></h2>
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
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content table-responsive">
              <table class="table table-hover" style="color: #c15c5c;">
                <thead>
                 <tr>
                    <th>#</th>
                    <th>Teacher</th>
                    <th style="text-align:right;">Income</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $count1 = 1; ?>
                  <?php $sum1 = 0; ?>
                  <?php $sum1 = 0; ?>
                  @foreach($bottomfivebyteacher as $u_info)
                  <?php $sum1=$sum1+$u_info->total ?>
                  <?php $sum1=$sum1+$u_info->total ?>
                  <tr>
                    <th scope="row">{{ $count1 }}</th>
                    <td>{{ $u_info->lecturer_name }}</td>
                    <td style="text-align:right;">{{ $u_info->total }}</td>
                  </tr>
                  <?php $count1+=1; ?>
                  @endforeach
                  <!-- <strong>Bootom Five Total</strong>
                  <strong>{{ $sum1 }}</strong> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320">
          <div class="x_title">
            <h2>App Versions</h2>
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
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <h4>App Usage across versions</h4>
            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.2</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>123k</span>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.3</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>53k</span>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.4</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>23k</span>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.5</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>3k</span>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.6</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>1k</span>
              </div>
              <div class="clearfix"></div>
            </div>

          </div>
        </div>
      </div>
      </div>
    </div>

    <script>

    var create_at_x=[];
    var income_y=[];
    var income_chart_items = @json($incomechart);
    for (var i = income_chart_items.length - 1; i >= 0; i--) {
       create_at_x[i] = income_chart_items[i].created_at;
       income_y[i]    = income_chart_items[i].invoice_amount;
    }
    console.log(income_y);


    var config = {
      type: 'line',
      data: {
        labels: create_at_x,
        datasets: [{
          label: 'Income Statistics',
          backgroundColor: window.chartColors.red,
          borderColor: window.chartColors.red,
          data: income_y,
          fill: false,
        }]
      },
      options: {
        responsive: true,
        title: {
          display: true,
          text: ''
        },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
        scales: {
          xAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: ''
            }
          }],
          yAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Income'
            }
          }]
        }
      }
    };

      var ctx = document.getElementById('income_chart').getContext('2d');
      window.myLine = new Chart(ctx, config);

    document.getElementById('randomizeData').addEventListener('click', function() {
      config.data.datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function() {
          return randomScalingFactor();
        });

      });

      window.myLine.update();
    });
  </script>