        @extends('layouts.app_invoice')
        @section('content')

        <!-- <script src="{{ asset('js/components/classroom_register.js') }}" defer></script> -->
        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
       <!-- page content -->
            <div class="">
              <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Invoice <small>Student Payment Invoice</small></h2>
                    <br>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <section class="content invoice">
                      
                        <!-- accepted payments column -->
                        <form name="my_form" id="my_form" onSubmit="return false;">
                          <div class="row">

                            <div class="col-md-6">
                             
                              <div class="table-responsive">
                                <table class="table">
                                  <tbody>
                                    <tr >
                                      <th style="width:50%" class="">
                                        <img src="images/visa.png" alt="Visa">
                                        <img src="images/mastercard.png" alt="Mastercard">
                                        <img src="images/american-express.png" alt="American Express">
                                        <img src="images/paypal.png" alt="Paypal">
                                        <div class="clearfix"></div>
                                      </th>
                                      <td class="text-right" style="font-size: 18px;">
                                        <select class="form-control "  autofocus="">
                                          <option value="Cash">Cash</option>
                                          <option value="Free Card">Free Card</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr >
                                      <th style="width:50%" class="">Student ID:</th>
                                      <td class="text-right" style="font-size: 18px;">
                                        <input onkeypress="nextSelectLecture(event)"  type="text" value="STUD-2020-ART-0001" class="form-control text-right" name="invoice_student_id" id="invoice_student_id">
                                      </td>
                                    </tr>
                                    <tr>
                                      <th class="">Select the Lecture</th>
                                      <td>
                                         <input type="text" onkeypress="nextAmount(event);" name="invoice_lecture_title" id="autocomplete-custom-append" class="form-control text-right"  autocomplete="off" placeholder="Find the lecture here.." readonly="" />
                                      </td>
                                    </tr>
                                    <tr>
                                      <th class="">Amount:</th>
                                      <td style="font-size: 18px;"><span class="text-left">RS:</span><span style="float: right;" class="text-right">
                                        <input readonly="" type="text" readonly="" class="form-control text-right" value="1000" class="form-control text-right" name="invoice_amount" id="invoice_amount" placeholder="0.00" >
                                      </span> </td>
                                    </tr>
                                    <tr>
                                      <th class="">Receved Amount</th>
                                      <td style="font-size: 18px;"><span class="text-left">RS:</span><span style="float: right;" class="text-right"><input  type="number" class="form-control text-right" value="" class="form-control text-right" readonly="" name="invoice_amount_received" onkeyup="countDueAmount(event);" onkeypress ="confirmPayment(event);" id="invoice_amount_received" placeholder="0.00" ></span> </td>
                                    </tr>
                                    <tr>
                                      <th class="">Due Amount</th>
                                      <td style="font-size: 23px;"><span class="text-left">RS:</span><span style="float: right;" class="text-right">
                                        <input type="text" name="invoice_amount_due" id="invoice_amount_due" class="form-control text-right text-danger" readonly="" placeholder="0.00">
                                      </span> </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div class=" ">
                                  <button class="btn btn-success pull-right"> Complete payment</button>
                                  <button class="btn btn-danger pull-right" style="margin-right: 5px;"> Cancel payment</button>
                                </div>
                                <br>
                                <br>
                              </div>
                            </div>
                        <!-- /.col -->
                        <div class="col-md-6 profile_details well profile_view mr-">
                          
                              <div class="col-sm-12">
                                <h4 class="brief"><i>Student Card</i></h4>
                                <div class="left col-sm-7">
                                  <h2>Nicole Pearson</h2>
                                  <p><strong>About: </strong> Web Designer / UI. </p>
                                  <ul class="list-unstyled">
                                    <li><i class="fa fa-building"></i> Address: </li>
                                    <li><i class="fa fa-phone"></i> Phone #: </li>
                                    <li><i class="fa fa-building"></i> Address: </li>
                                    <li><i class="fa fa-phone"></i> Phone #: </li>
                                  </ul>
                                </div>
                                <div class="right col-sm-5 text-center">
                                  <img src="images/user.png" alt="" class="img-circle img-fluid">
                                </div>
                                <div class="left col-sm-12">
                                  <h2>Nicole Pearson</h2>
                                    <div  style="height: 50px;background-color: gray;"></div>
                                </div>
                              </div>
                              <div class=" bottom text-left">
                                <div class=" col-sm-6 emphasis mt-2">
                                  <p class="ratings">
                                    <a>4.0</a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                  </p>
                                </div>
                                <div class=" col-sm-6 emphasis mt-2">
                                  <button  class="btn btn-success btn-sm"> <i class="fa fa-user">
                                    </i> <i class="fa fa-comments-o"></i> </button>
                                  <button  class="btn btn-primary btn-sm">
                                    <i class="fa fa-user"> </i> View Profile
                                  </button>
                                </div>
                              </div>
                        <!-- /.col -->
                      </div>
                          </div>
                        </form>
                    
                     
                    </section>
                  </div>
                </div>
              </div>
            </div>
 <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>

            </div>
          
        <script>

          $("#invoice_student_id").submit(function() {
            alert()
              search($("#searchText").get(0));
              return false;
          });


          window.addEventListener('load', function () {
            $('input[name="invoice_student_id"]').focus();
          })

          function nextSelectLecture(event){
            if(event.keyCode==13){
              var invo_id = document.getElementById("invoice_student_id").value;
                if(invo_id==""){
                  alert("Student id field is empty!")
                }else{
                  $('#autocomplete-custom-append').prop('readonly', false);
                  document.getElementById("autocomplete-custom-append").focus();
                }
              }
          }

           function nextAmount(event){
            if(event.keyCode==13){
              var lec_title = document.getElementById("autocomplete-custom-append").value;
                if(lec_title==""){
                  alert("Lecture field is required!")
                }else{
                  alert("Success! but this shoyud confirm using ajax");
                  $('#invoice_amount_received').prop('readonly', false);
                  document.getElementById("invoice_amount_received").focus();
                }
              }
          }

          function countDueAmount(event){
            var amount_invoice = $('#invoice_amount').val();
            var amount_invoice_received = $('#invoice_amount_received').val();
            if(event.keyCode!=13){
                 console.log(amount_invoice_received-amount_invoice);
                 $('#invoice_amount_due').val(amount_invoice_received-amount_invoice);
              }
            }

            function confirmPayment(event){
              var amount_invoice2 = $('#invoice_amount').val();
              var amount_invoice_received2 = $('#invoice_amount_received').val();
            if(event.keyCode==13){
                 if(amount_invoice_received2<amount_invoice2){
                  alert("Received amount is not enough !");
                }else{
                  alert("Success! due is RS:"+(amount_invoice_received2-amount_invoice2) +"this shoud view on a quick modal!");
                }
              }
            }
          </script>
        @endsection