  @extends('layouts.app_dashboard')
  @section('content')

  <script src="{{ asset('js/components/student_register.js') }}" defer></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <div class="right_col" role="main">
    <style>


.avatar-upload {
    position: relative;
    .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;
        input {
            display: none;
            + label {
                display: inline-block;
                width: 34px;
                height: 34px;
                margin-bottom: 0;
                border-radius: 100%;
                background: #FFFFFF;
                border: 1px solid transparent;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                cursor: pointer;
                font-weight: normal;
                transition: all .2s ease-in-out;
                &:hover {
                    background: #f1f1f1;
                    border-color: #d6d6d6;
                }
                &:after {
                    content: "\f040";
                    font-family: 'FontAwesome';
                    color: #757575;
                    position: absolute;
                    top: 10px;
                    left: 0;
                    right: 0;
                    text-align: center;
                    margin: auto;
                }
            }
        }
    }
    .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
}
    </style>
    <div class="">
      <div class="row">
        <div class="col-md-2 col-sm-12 "></div>
        <div class="col-md-8 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2> Add New Student <small>New Student Registration</small></h2>
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
              <br />
              <form class="form-horizontal form-label-left"  style="display: none">
                  {{ csrf_field() }}

                <div class="form-group row ">
                  <label class="control-label col-md-4 col-sm-4 ">Student Name<span class="required text-danger" > *</span></label>
                  <div class="col-md-8 col-sm-8 ">
                    <input type="text" name="student_name" id="student_name" class="form-control" placeholder="J.A.M. Amesha De Silva">
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="control-label col-md-4 col-sm-4 ">Student Address<span class="required text-danger" > *</span></label>
                  <div class="col-md-8 col-sm-8 ">
                    <input type="text" name="student_address" pattern="banana|cherry" id="student_address" class="form-control" placeholder="Ex: 1/462, Arangala, Malambe">
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="control-label col-md-4 col-sm-4 ">Student District<span class="required text-danger" > *</span></label>
                  <div class="col-md-8 col-sm-8 ">
                    <input type="text" name="student_location" pattern="banana|cherry" id="student_location" class="form-control" placeholder="Ex: Kurunegala">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4 col-sm-4 ">Student Gender</label>
                  <div class="col-md-8 col-sm-8 ">
                    <select class="form-control" name="student_gender" id="student_gender">
                      <option value="Gender">Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="control-label col-md-4 col-sm-4 ">Student Age<span class="required text-danger" > *</span></label>
                  <div class="col-md-8 col-sm-8 ">
                    <input type="number" name="student_age" class="form-control" id="student_age" placeholder="Ex: 16">
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="control-label col-md-4 col-sm-4 ">Date of Birth<span class="required text-danger" > *</span></label>
                  <div class="col-md-8 col-sm-8 ">
                    <input type="date" name="student_dob" id="student_dob" class="form-control" placeholder="Date of Birth">
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="control-label col-md-4 col-sm-4 ">Student NIC</label>
                  <div class="col-md-8 col-sm-8 ">
                    <input type="text" name="student_nic" id="student_nic" class="form-control" placeholder="Ex: 200023342443V">
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="control-label col-md-4 col-sm-4 ">Student Grade<span class="required text-danger" > *</span></label>
                  <div class="col-md-8 col-sm-8 ">
                    <select class="form-control" name="student_grade" id="student_grade">
                      <option selected value="Choose option">Select Your Grade</option>
                      <option value="Grade After Grade 13">Grade After Grade 13</option>
                      <option value="Grade 13">Grade 13</option>
                      <option value="Grade 12">Grade 12</option>
                      <option value="Grade 11">Grade 11</option>
                      <option value="Grade 09">Grade 09</option>
                      <option value="Grade 08">Grade 08</option>
                      <option value="Grade 07">Grade 07</option>
                      <option value="Grade 06">Grade 06</option>
                      <option value="Grade 05">Grade 05</option>
                      <option value="Grade 04">Grade 04</option>
                      <option value="Grade 03">Grade 03</option>
                      <option value="Grade 02">Grade 02</option>
                      <option value="Grade 01">Grade 01</option>
                      <option value="Before Grade 01">Before Grade 01</option>

                    </select>
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="control-label col-md-4 col-sm-4 ">Student Private Contact</label>
                  <div class="col-md-8 col-sm-8 ">
                    <input type="number" name="student_private_contact" id="student_private_contact" class="form-control" placeholder="Ex: 0777777777">
                  </div>
                </div>
                <div class="form-group row ">
                  <label class="control-label col-md-4 col-sm-4 ">Student Guardian Contact <span class="required text-danger" > *</span></label>
                  <div class="col-md-8 col-sm-8 ">
                    <input type="number" name="student_guardian_contact" id="student_guardian_contact" class="form-control" placeholder="Ex: 0777777777">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4 col-sm-4 ">Student Type</label>
                  <div class="col-md-8 col-sm-8 ">
                    <select class="form-control" name="student_type" id="student_type">
                      <option value="General">General</option>
                      <option value="Primary">Primary</option>
                      <option value="O/L">O/L</option>
                      <option value="A/L">A/L</option>
                      <option value="After O/L">After O/L</option>
                      <option value="After A/L">After A/L</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-4 col-sm-4 ">Remarks</label>
                  <div class="col-md-8 col-sm-8 ">
                    <textarea class="form-control" rows="3"  pattern="banana|cherry" name="student_remarks" id="student_remarks" placeholder="Write student remarks here.."></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-4 col-sm-4 ">Student Status</label>
                  <div class="col-md-8 col-sm-8 ">
                    <div class="">
                      <label>
                        <input type="checkbox" id="student_status" name="student_status" class="js-switch" checked />  Active
                      </label>
                    </div>
                  </div>
                </div>
                <input type="hidden" value="{{ Auth::user()->name }}" name="created_by" id="created_by">
                <div class="ln_solid"></div>
                <div class="form-group text-right">
                  <div class="col-md-8 col-sm-8  offset-md-4">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="reset" id="reset_all" class="btn btn-primary">Reset</button>
                    <button class="btn btn-success" id="studentbtn">Save</button>
                    
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h3>Latest Five Records</h3>
          <br>
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>#</th>
                <th>CREATED DATE</th>
                <th>STUD. NAME</th>
                <th>STUD. ADDRESS</th>
                <th>PVT. CONTACT</th>
                <th>GURD. CONTACT</th>
                <th>NIC</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody>
              {{$xx = 0}}

              @foreach($students as $u_info)
              {{$xx=$xx+1}}
              
                <?php if($xx==1){
                  echo '<tr style="color:green;">';
                }else{
                  echo '<tr>';
                } ?>
                <td>{{ $u_info->id }}</td>
                <td>{{$u_info->created_at}}</td>
                <td>{{ $u_info->student_name }}</td>
                <td>{{ $u_info->student_address }}</td>
                <td>{{ $u_info->student_private_contact }}</td>
                <td>{{ $u_info->student_private_contact }}</td>
                <td>{{ $u_info->student_nic }}</td>
                <td>{{ $u_info->student_status }}</td>
              </tr>
              @endforeach
              
              
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
        <button type="button"  id="image_upload_modal" style="display: none;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
      </div>
      <div class="clearfix"></div>
    </footer>

     <!-- Photo Upload Model -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Upload Student Photo</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">

              <!--  -->
              <form method="post" id="upload_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="avatar-upload">
                        <div class="row" id="message" style="display: none"></div>
                          <div class="row">
                        
                        <div class="col-6 avatar-preview">
                            <div id="imagePreview"  style="background-image: url(../images/profile-dummy.png);height: 200px;background-size: cover;">
                            </div>
                        </div>
                        <div class="col-6 avatar-edit">
                            <input type='file' name="imageUpload" id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="student_id" id="student_id" value="22">
                            <label for="imageUpload"></label>
                            <button type='submit' id="submit_image" class="btn btn-success mt-5 pl-2 pr-2">Upload</button>
                        </div>

                        </div>
                    </div>
                    </form>
              <!--  -->
              <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                            $('#imagePreview').hide();
                            $('#imagePreview').fadeIn(650);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#imageUpload").change(function() {
                    readURL(this);
                });
              </script>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>
      <script>
        $(document).ready(function(){

           $('#upload_form').on('submit', function(event){
            event.preventDefault();

            $.ajax({
             url:"/student/photo/upload/fresh",
             method:"POST",
             data:new FormData(this),
             dataType:'JSON',
             contentType: false,
             cache: false,
             processData: false,
             success:function(data)
             {
              if($.isEmptyObject(data.error)){
                $('#message').css('display', 'block');
                $('#message').html('<div class="alert alert-success"><strong> '+data.success+'</strong></div>');
            }else{
              $('#message').css('display', 'block');
              $('#message').html('<div class="alert alert-danger"><strong> '+data.error+'</strong></div>');
            }
              
             }
            });
           });

          });
      </script>
    <!-- /footer content -->
    @endsection