@extends('layouts.app')

@section('content')
<script src="{{ asset('js/components/lectureoperator.js') }}" defer></script>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

           <div class="card-body">
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
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
@endsection