  @extends('layouts.app_dashboard')
  @section('content')

  <script src="{{ asset('js/components/lecturer_register.js') }}" defer></script>
  <div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-2 col-sm-12 "></div>
        <div class="col-md-8 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2> New Lecurer <small>Lecurer Registration</small></h2>
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

                <div class="alert alert-danger print-error-msg" style="display:none">
                  <ul></ul>
                </div>
                <div class="alert alert-success print-success-msg" style="display:none">
                  Successfully created new classroom!
                </div>
                <form class="form input_mask" style="display: none;">
                    {{ csrf_field() }}
                    
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                      <label>Title</label>
                      <select class="form-control" name="teacher_title" id="teacher_title">
                        <option selected="Select Title" value="">Select Title</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Dr.">Dr.</option>
                      </select>
                  </div>
                  
                    <div class="col-md-8 col-sm-8  form-group">
                      <label>Teacher name</label>
                        <input type="text" class="form-control" name="teacher_name" id="teacher_name" placeholder="ex:  Sandasiri Balasooriya">
                    </div>

                    <div class="col-md-4 col-sm-4  form-group">
                      <label>Teacher Type</label>
                        <select class="form-control" name="teacher_group" id="teacher_group">
                        <option selected="Select Title" value="">Select Teacher Group</option>
                        <option value="University Lectures">University Lectures</option>
                        <option value="Advanced Level">Advanced Level</option>
                        <option value="Ordinary Level">Ordinary Level</option>
                        <option value="Primary">Primary</option>
                        <option value="General">General</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="col-md-8 col-sm-8  form-group">
                      <label>Mobile Number</label>
                        <input type="number" class="form-control" name="teacher_mobile" id="teacher_mobile"  placeholder="ex: 0777777777">
                        
                    </div>
                    <div class="col-md-4 col-sm-4  form-group">
                      <label>Subject</label>
                        <input type="text" class="form-control" name="teacher_subject" id="teacher_subject"  placeholder="ex:  Accounting">
                       
                    </div>
                    <div class="col-md-4 col-sm-4  form-group">
                      <label>Bank Account Number & Bank </label>
                        <input type="text" class="form-control" name="teacher_bank_account" id="teacher_bank_account"  placeholder="ex:  0551111555500-BOC">
                        
                    </div>
                    <div class="col-md-4 col-sm-4  form-group">
                      <label>Revenue Percentage (without % symbal)</label>
                        <input type="number" class="form-control has-feedback" name="revenue_percentage" id="revenue_percentage" placeholder="ex: 70">
                    </div>
                    <div class="col-md-12 col-sm-12  form-group ">
                       <label>Address</label>
                        <input type="text" class="form-control " name="teacher_address" id="teacher_address" placeholder="ex: No 64, Turnour Rd, Colombo 08 ">
                        <span class="fa fa-home form-control" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 form-group" >
                      <label>Remarks/ Notes</label>
                        <textarea type="text" class="form-control" name="teacher_notes" id="teacher_notes"  placeholder="Remarks here.."></textarea>
                    </div>
                    <div class="col-md-6 col-sm-6  form-group">
                        <label>NIC Number</label>
                        <input type="number" class="form-control" name="teacher_nic" id="teacher_nic"  placeholder="NIC Number">

                    </div>
                    <div class="col-md-6 col-sm-6  form-group">
                      <label>Date Of Birth</label>
                        <input type="date" class="form-control " name="teacher_dob" id="teacher_dob" placeholder="Date of birth">
                    </div>
                    <div class="col-md-6 col-sm-6  form-group ">
                        <label>Profile Image</label>
                        <input type="file" class="form-control" name="teacher_image" id="teacher_image" >
                    </div>

                <!--     <div class="col-md-6 col-sm-6  form-group">
                          <label>Availability </label>
                          <br><br>
                            <input type="checkbox" class="form-control js-switch col-md-4 col-sm-4" name="teacher_status" id="teacher_status" checked /> Status
                    </div> -->
                    <div class="ln_solid"></div>
                    <div class="form-group row">
                      <div class="col-md-9 col-sm-9  offset-md-3 text-right">
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
