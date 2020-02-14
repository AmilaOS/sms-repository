        @extends('layouts.app')
        @section('content')

        <!-- <script src="{{ asset('js/components/classroom_register.js') }}" defer></script> -->

       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Invoice <small>Student Payment Invoice</small></h2>
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
                    <section class="content invoice">
                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-6">
                              <img src="images/visa.png" alt="Visa">
                              <img src="images/mastercard.png" alt="Mastercard">
                              <img src="images/american-express.png" alt="American Express">
                              <img src="images/paypal.png" alt="Paypal">
                              <div class="clearfix"></div>
                              <br>
                              <p class="lead">Payments:</p>
                            </div>
                            <div class="col-6">
                              <select class="form-control ">
                                <option>Cash</option>
                                <option>Free Card</option>
                              </select>
                              <div class="clearfix"></div>
                              <br>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr >
                                  <th style="width:50%" class="">Student ID:</th>
                                  <td class="text-right" style="font-size: 18px;">STUD-2020-ART-0001</td>
                                </tr>
                                <tr>
                                  <th class="">Select the Lecture</th>
                                  <td>
                                    <select class="form-control ">
                                      <option>Select Lecture</option>
                                      <option>Lecture 01</option>
                                      <option>Lecture 02</option>
                                      <option>Lecture 03</option>
                                      <option>Lecture 04</option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <th class="">Amount:</th>
                                  <td style="font-size: 23px;"><span class="text-left">RS:</span><span style="float: right;" class="text-right">1000.00</span> </td>
                                </tr>
                                <tr>
                                  <th class="">Receved Amount</th>
                                  <td style="font-size: 23px;"><span class="text-left">RS:</span><span style="float: right;" class="text-right">1000.00</span> </td>
                                </tr>
                                <tr>
                                  <th class="">Due Amount</th>
                                  <td style="font-size: 23px;"><span class="text-left">RS:</span><span style="float: right;" class="text-right">0.00</span> </td>
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
                                  <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                                    </i> <i class="fa fa-comments-o"></i> </button>
                                  <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fa fa-user"> </i> View Profile
                                  </button>
                                </div>
                              </div>
                        <!-- /.col -->
                      </div>
                    </div>
                     <br>
                      <!-- /.row -->
                      <div class="x_title">
                        <h2>Invoices<small>Student Payment Invoices</small></h2>
                    
                        <div class="clearfix"></div>
                      </div>
                      <!-- Table row -->
                      <div class="row">
                        <div class="  table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#ID</th>
                                <th>DATE TIME</th>
                                <th>AMOUNT</th>
                                <th style="width: 15%">STUD. NAME</th>
                                <th>AMOUNT</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Call of Duty</td>
                                <td>455-981-221</td>
                                <td>OAP Silva</td>
                                <td>$64.50</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Need for Speed IV</td>
                                <td>247-925-726</td>
                                <td>OAP Silva</td>
                                <td>$50.00</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Monsters DVD</td>
                                <td>735-845-642</td>
                                <td>OAP Silva</td>
                                <td>$10.70</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Grown Ups Blue Ray</td>
                                <td>422-568-642</td>
                                <td>OAP Silva</td>
                                <td>$10.70</td>
                              </tr>
                               <tr>
                                <td>1</td>
                                <td>Call of Duty</td>
                                <td>455-981-221</td>
                                <td>OAP Silva</td>
                                <td>$64.50</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Need for Speed IV</td>
                                <td>247-925-726</td>
                                <td>OAP Silva</td>
                                <td>$50.00</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Monsters DVD</td>
                                <td>735-845-642</td>
                                <td>OAP Silva</td>
                                <td>$10.70</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Grown Ups Blue Ray</td>
                                <td>422-568-642</td>
                                <td>OAP Silva</td>
                                <td>$10.70</td>

                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class=" ">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
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