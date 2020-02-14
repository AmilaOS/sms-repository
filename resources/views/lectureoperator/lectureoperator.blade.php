@extends('layouts.app_dashboard')
@section('content')

<script src="{{ asset('js/components/lectureoperator.js') }}" defer></script>


 <div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-2 col-sm-12 "></div>
        <div class="col-md-8 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2> Add New Lecture Hall Operator <small>Lecture hall operator Registration</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a class="dropdown-item" href="#">Settings 1</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
                <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
                </div>
               <div class="alert alert-success print-success-msg" style="display:none">
               Successfully added new lecture hall operator!
               </div>
              <form class="form-horizontal form-label-left">
                  {{ csrf_field() }}
                <div class="form-group row ">
                  <label class="control-label col-md-3 col-sm-3 ">Hall Operator Name <span style="font-size: 17px;" class="required text-danger">*</span></label>
                  <div class="col-md-9 col-sm-9 ">
                    <input type="text" class="form-control" name="lecture_hall_operator_name" id="lecture_hall_operator_name" placeholder="Enter name here..">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 ">Contact<span style="font-size: 17px;" class="required text-danger">*</span></label>
                  <div class="col-md-9 col-sm-9 ">
                    <input type="number" name="lecture_hall_operator_contact" id="lecture_hall_operator_contact" placeholder="Enter phone number Here.." class="form-control"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 ">Select Lecture Room</label>
                  <div class="col-md-9 col-sm-9 ">
                    <input type="text" name="lecture_hall_operator_lec_room" id="lecture_hall_operator_lec_room" placeholder="Type class room name here.." class="form-control"/>
                  </div>
                </div>
                <!-- <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 ">Select</label>
                  <div class="col-md-4 col-sm-4 ">
                    <select class="form-control">
                      <option>Choose option</option>
                      <option>Option one</option>
                      <option>Option two</option>
                      <option>Option three</option>
                      <option>Option four</option>
                    </select>
                  </div>
                </div> -->
                <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 ">More Information
                  </label>
                  <div class="col-md-9 col-sm-9 ">
                    <textarea class="form-control" rows="3" id="lecture_hall_operator_info" name="lecture_hall_operator_info" placeholder="Decribe this class here.."></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 ">Operator Status
                  </label>
                  <div class="col-md-9 col-sm-9 ">
                    <label><input type="checkbox" name="lecture_hall_operator_status" id="lecture_hall_operator_status" class="js-switch" checked /> Active</label>
                    <input type="hidden" value="{{ Auth::user()->name }}" name="created_by" id="created_by">
                  </div>
                </div>



                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-9 col-sm-9  offset-md-3">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      <button type="reset" class="btn btn-primary">Reset</button>
                      <button class="btn btn-success" id="roomsavebtn">Save</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
       <div class="row">
        <div class="col-12">
          <br>
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>#</th>
                <th>CREATED DATE</th>
                <th>ROOM NO:</th>
                <th>ROOM NAME</th>
                <th>STUDENT AMOUNT</th>
                <th>DESCRIPTION</th>
                <th>CATEGORY</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
              </tr>
              <tr>
                <td>Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>8422</td>
                <td>g.winters@datatables.net</td>
              </tr>
              <tr>
                <td>Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>1562</td>
                <td>a.cox@datatables.net</td>
              </tr>
              <tr>
                <td>Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>6224</td>
                <td>c.kelly@datatables.net</td>
              </tr>
              <tr>
                <td>Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>5407</td>
                <td>a.satou@datatables.net</td>
              </tr>
              <tr>
                <td>Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
                <td>4804</td>
                <td>b.williamson@datatables.net</td>
              </tr>
              <tr>
                <td>Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
                <td>9608</td>
                <td>h.chandler@datatables.net</td>
              </tr>
              <tr>
                <td>Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
                <td>6200</td>
                <td>r.davidson@datatables.net</td>
              </tr>
              <tr>
                <td>Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
                <td>2360</td>
                <td>c.hurst@datatables.net</td>
              </tr>
              <tr>
                <td>Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
                <td>1667</td>
                <td>s.frost@datatables.net</td>
              </tr>
            </tbody>
          </table>
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
    @endsection