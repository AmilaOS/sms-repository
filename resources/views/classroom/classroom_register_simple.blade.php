@extends('layouts.app')

@section('content')
 <script src="{{ asset('js/components/classroom_register.js') }}" defer></script>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                      <div class="alert alert-danger print-error-msg" style="display:none">
                      <ul></ul>
                      </div>
                      <div class="alert alert-success print-success-msg" style="display:none">
                          Successfully created new classroom!
                      </div>
                      <br />
                      <form class="form-horizontal form-label-left">
                          {{ csrf_field() }}
                        <div class="form-group row ">
                          <label class="control-label col-md-4 col-sm-4 ">Class Room Number<span class="required text-danger" > *</span></label>
                          <div class="col-md-8 col-sm-8 ">
                            <input type="text" name="room_number" id="room_number" class="form-control" placeholder="Class Room Numbe">
                          </div>
                        </div>
                        <div class="form-group row ">
                          <label class="control-label col-md-4 col-sm-4 ">Class Name<span class="required text-danger" > *</span></label>
                          <div class="col-md-8 col-sm-8 ">
                            <input type="text" name="room_name" pattern="banana|cherry" id="room_name" class="form-control" placeholder="Class Name">
                          </div>
                        </div>
                        <div class="form-group row ">
                          <label class="control-label col-md-4 col-sm-4 ">Maximum Student Amount<span class="required text-danger" > *</span></label>
                          <div class="col-md-8 col-sm-8 ">
                            <input type="number" name="room_student_amount" class="form-control" id="room_student_amount" placeholder="Maximum Student Amount">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label col-md-4 col-sm-4 ">Class Room Description</label>
                          <div class="col-md-8 col-sm-8 ">
                            <textarea class="form-control" rows="3"  pattern="banana|cherry" name="room_description" id="room_description" placeholder="Describe this class room specifications.."></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label col-md-4 col-sm-4 ">Class Room Category</label>
                          <div class="col-md-8 col-sm-8 ">
                            <select class="form-control" name="room_category" id="room_category">
                              <option selected value="Choose option">Choose option</option>
                              <option value="Option 1">Option one</option>
                              <option value="Option 2">Option two</option>
                              <option value="Option 3">Option three</option>
                              <option value="Option 4">Option four</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label col-md-4 col-sm-4 ">Class Room Status</label>
                          <div class="col-md-8 col-sm-8 ">
                            <div class="">
                              <label>
                                <input type="checkbox" id="room_status" name="room_status" class="js-switch" checked /> Class Room Available
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group text-right">
                          <div class="col-md-8 col-sm-8  offset-md-4">
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
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
