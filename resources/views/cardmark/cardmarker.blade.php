<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="invoice_resources/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<link href = "autocomplete_new/jquery-ui.css"rel = "stylesheet">
<script src = "autocomplete_new/jquery-1.10.2.js"></script>
<script src = "autocomplete_new/jquery-ui.js"></script>
<script src = "js/moment.js"></script>

<!-- BARCODE PLUGIN -->
<script type="text/javascript" src="js/jquery-barcode.js"></script>
<!-- FFFFFFFFFFFFFFFFFFF -->
<!-- https://www.jqueryscript.net/other/Multifunctional-Barcode-Generator-with-jQuery-Html5-Canvas-JsBarcode.html -->

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 16px;
}

select{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 18px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.ui-widget-header
{
    background-color: red;
    background-image: none;
    color: Black;
}

#studentscss {
  border-collapse: collapse;
  width: 100%;
}

#studentscss td, #studentscss th {
  border: 1px solid #ddd;
  padding: 3px;
  font-size: 12px;
}

#studentscss tr:nth-child(even){background-color: #f2f2f2;font-size: 12px;}

#studentscss tr:hover {background-color: #ddd;}

#studentscss th {
  padding-top: 2px;
  padding-bottom: 10px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  font-size: 14px;
}
</style>
</head>
<body onload="onLoadPage();">
<script>
  var lecture_list;
</script>

<div class="row" style="padding-left: 50px;padding-right: 50px;">
   <div class="col-50">
   <div style="padding: 20px;border-color: grey;border-style: solid;border-width: thin;">
      <div class="row">
      <div class="col-50">
          <h2 id="stud_pro_name"></h2>
          <h3><strong>About Student: </strong></h3>
          <ul class="list-unstyled">
            <li style="margin-bottom: 5px;list-style-type: none;"><i class="fa fa-building"></i> <span id="stud_pro_address"></span> </li>
            <li style="margin-bottom: 5px;list-style-type: none;"><i class="fa fa-phone"></i> <span id="stud_pro_private_mobile"></span> </li>
            <li style="margin-bottom: 5px;list-style-type: none;"><i class="fa fa-building"></i> <span id="stud_pro_guard_mobile"></span> </li>
            <li style="margin-bottom: 5px;list-style-type: none;"><i class="fa fa-phone"></i> <span id="stud_pro_nic"></span> </li>
            <li style="margin-bottom: 5px;list-style-type: none;" id="stud_pro_status"> </li>
          </ul>
      </div>

      <div class="col-50" style="text-align:right">
        <span id="stud_pro_image">
          <img class="img-responsive avatar-view" src="../private_image_store/student_images/original/profile-dummy.PNG" style="height: 150px;width: 150px;border-color: grey;border-style: solid;border-width: thin;" alt="Avatar" title="Change the avatar">
        </span>
        <br>
         <!--  <img src="https://www.sageintelligence.com/wp-content/uploads/2017/08/Image-1-3.png" style="max-width: 200px;height: 80px;"> -->
         <div id="demo" style="max-width: 200px;height: 80px;margin-left:100px;"></div>

      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-100">
        <div style="padding: 20px;padding-top: 0px;">
          <h3><strong>Presence History <span id="paid_week_message"></span></strong></h3> 
          <table id="studentscss">
          </table>
        </div>
      </div>

  </div>
   </div>
</div>
  <div class="col-50">
    <div class="container">
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
      <form action="#">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-50">
            <h3>Record Student Entry </h3>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
          </div>
            <div class="col-50" style="text-align: right;">
               <a href="/" style="margin-left: 10px;">
                <img src="../images/icons/home.svg" style="height: 50px;width: 50px;">
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        var xxx = confirm('Are you sure?');
                         if(xxx){
                          document.getElementById('logout-form').submit();
                        } "> 

                  <img src="../images/icons/logout.png" style="height: 50px;width: 50px;">
              </a>

            </div>

        </div>
        <div class="row">
          <div class="col-75" id="form_background">
            <label for="cname"> <i class="fa fa-address-card-o"></i>Select Lecture</label>
            <input onkeypress="nextAmount(event);" autocomplete="off" id ="invoice_lecture_title" name="invoice_lecture_title" type="text" placeholder="Find the Lecture/Cource here..">
            <label id="invoice_student_id_labal"><i class="fa fa-address-card-o"></i> Student Card Number</label>
            <input type="text" id="invoice_student_id" onkeypress="checkPresentationBtn(event)" name="invoice_student_id" placeholder="EX : 0012918120101321" autocomplete="off">


            <input style="display: none;" type="button" onclick="entryWithoutPayment();" id="entry_without_payement" name="entry_without_payement" value="Accept Anyway" class="btn">

            <input style="display: none;background-color: #F12828;" type="button" onclick="payWithoutPaymentCancel();" id="entry_without_payement_cancel" name="entry_without_payement_cancel" value="Cancel" class="btn">



           <label for="invoice_student_id">Remarks</label>
           <textarea placeholder="EX: ISSUED TUTE NO:1102." rows="4" name="marking_remarks" id="marking_remarks" autocomplete="off" cols="52" style="margin-bottom: 10px;"></textarea>

           <span style="color: red;"><strong>TUTE ISSUED</strong> </span><input type="checkbox" unchecked="" name="marking_tute_state" id="marking_tute_state" value="issued">
            <!-- <img src="https://www.sageintelligence.com/wp-content/uploads/2017/08/Image-1-3.png" style="width: 200px;height: 70px;"> -->
            <input type="button" onclick="presshEnter();" id="check_out" value="Record Student Presence" class="btn col-8">
          </div>
          <div class="col-25">
          </div>
          
        </div>
        <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing <span> <input type="reset" id="reset_all"></span>
        </label> -->
        

        <input type="hidden" name="created_by" id="created_by" value="{{ Auth::user()->name }}">
        <input type="hidden" name="invoice_lecture_id" id="invoice_lecture_id" value="">
        <input type="hidden" name="marking_comp_id" id="marking_comp_id" value="Sample(Pvt)Ltd">

        <audio id="audio_success" src="beep_sounds/success.wav" autoplay="false" ></audio>
        <audio id="audio_warning" src="beep_sounds/short_wirning.wav" autoplay="false" ></audio>

      </form>
    </div>
  </div>
 
</div>

<!-- AUTOCOMPLETE -->
<script>


</script>

<!-- PRESS ENTER CONTROL -->
 <script>

  $("#invoice_student_id").submit(function() {
    alert()
      search($("#searchText").get(0));
      return false;
  });


  window.addEventListener('load', function () {
    alert('[01] : SELECT THE LECTURE.\n[02] : TICK CHECK BUTTON "TUTE ISSUED" IF ISSUE TUTES.\n[03] : WRITE REMARKS.');
    $('input[name="invoice_lecture_title"]').focus();

  })

  function checkPresentationBtn(event){
    if(event.keyCode==13){
      event.preventDefault();
      var invo_id = document.getElementById("invoice_student_id").value;
        if(invo_id==""){
          errorAlert("error","Student id field is empty!");
        }else{
          markStudnetPresentation();
          document.getElementById("form_background").style.backgroundColor="";
        }
      }
  }

   function nextAmount(event){
    if(event.keyCode==13){
      event.preventDefault();
      var lec_title = document.getElementById("invoice_lecture_title").value;
        if(lec_title==""){
          errorAlert("error","Lecture field is required!");
        }else{
          getLecInfo();
        }
      }
  }

  function countDueAmount(event){
    var amount_invoice = $('#invoice_amount').val();
    var amount_invoice_received = $('#invoice_amount_received').val();
    if(event.keyCode!=13){
      event.preventDefault();
         console.log(amount_invoice_received-amount_invoice);
         $('#invoice_amount_due').val(amount_invoice_received-amount_invoice);
      }
    }

    // function confirmPayment(event){
    //   let amount_invoice2 = Number($('#invoice_amount').val());
    //   let amount_invoice_received2 = Number($('#invoice_amount_received').val());
    //   if(event.keyCode==13){
    //      event.preventDefault();
    //      if((amount_invoice_received2-amount_invoice2)>=0){
    //         var confirm_payment = confirm("Proceed this transaction?");
    //         if(confirm_payment){
    //            document.getElementById("invoice_amount_received").style.backgroundColor="#C9FEB4";
    //            ajaxPayment();
    //         }
    //       }else{
    //         errorAlert("error","Received amount is not enough !");

    //         document.getElementById("invoice_amount_received").style.backgroundColor="#FF6666";
    //       }
    //   }
    // }

    function markStudnetPresentation(){
      var student_id_is_available = $('#invoice_student_id').val();
      var _token = $("input[name='_token']").val();
      $.ajax({
        url: "student/isavailable/marking",
        type: "post", //send it through get method
        data: { 
          student_id_is_available: student_id_is_available,
          _token:_token,
        },
        success: function(data) {
          if($.isEmptyObject(data.error)){
              document.getElementById("invoice_student_id").style.backgroundColor="#C9FEB4";
              $('#invoice_lecture_title').prop('readonly', false);
              // document.getElementById("invoice_lecture_title").focus();
              
              $("#stud_pro_name").text(data.stud_data.student_name);
              $("#stud_pro_address").text(data.stud_data.student_address);
              $("#stud_pro_private_mobile").text(data.stud_data.student_private_contact);
              $("#stud_pro_guard_mobile").text(data.stud_data.student_guardian_contact);
              $("#stud_pro_nic").text(data.stud_data.student_nic);
              // console.log(data.stud_data);
              if(data.stud_data.student_status==1){
                $("#stud_pro_status").html('<strong style="color: green;">Active Student</strong>');
              }else{
                $("#stud_pro_status").html('<strong style="color: red;">Student Deactivated</strong>');
              }
              if(data.stud_data.student_image==1){
                $("#stud_pro_image").html('<img class="img-responsive avatar-view" src="../private_image_store/student_images/original/'+data.stud_data.id+'.PNG" style="height: 150px;width: 150px;border-color: grey;border-style: solid;border-width: thin;" alt="Avatar" title="Change the avatar">');
              }else{
                $("#stud_pro_image").html('<img class="img-responsive avatar-view" src="../private_image_store/student_images/original/profile-dummy.PNG" style="height: 150px;width: 150px;border-color: grey;border-style: solid;border-width: thin;" alt="Avatar" title="Change the avatar">');
              }
               $("#demo").barcode(
                data.stud_data.student_barcode, // Value barcode (dependent on the type of barcode)
                "code11" // type (string)
                ); 
              
               recordPresentationRecs();
          }else{

            document.getElementById("invoice_student_id").style.backgroundColor="#FF6666";
            errorAlert("error",data.error);
            $('#invoice_student_id').val("");
          }
        }
      });
    }

    function recordPresentationRecs(){
      // var marking_student_id      = $('#invoice_student_id').val();//barcode
      var _token                  = $("input[name='_token']").val();
      var created_by              = document.getElementById("created_by").value;
      var marking_operator_id     = document.getElementById("created_by").value;
      var marking_tute_state      = document.getElementById("marking_tute_state").checked;
      var marking_remarks         = document.getElementById("marking_remarks").value;
      var marking_lecture_title   = document.getElementById("invoice_lecture_title").value;
      var invoice_lecture_id      = document.getElementById("invoice_lecture_id").value;
      var student_barcode         = $('#invoice_student_id').val();

      var marking_institute       = document.getElementById("marking_comp_id").value;

      // var yesOrNo = confirm("Mark as \"TUTE ISSUED\"."+" Are you sure?");

      $.ajax({
        url: "/cardmarking",
        type: "post", //send it through get method
        data: { 
          // marking_student_id: marking_student_id,
          student_barcode:student_barcode,
          _token:_token,
          created_by:created_by,
          marking_operator_id:marking_operator_id,
          marking_tute_state:marking_tute_state,
          marking_remarks:marking_remarks,
          marking_lecture_title:marking_lecture_title,
          marking_institute:marking_institute,
          invoice_lecture_id:invoice_lecture_id,
        },
        success: function(data) {
          if($.isEmptyObject(data.error)){
            playsuccessSound();

            
            let paid_week = moment(data.paid_at, "DD-MM-YYYY").format('DD');
            if(paid_week%7==0){
              paid_week= paid_week/7;
            }else if(paid_week%7>0){
              paid_week= (paid_week/7)+1;
            }
            console.log(data.paid_at);
            var msg ='<span style="color: green;font-size: 35px;font-weight: 900px;padding-left: 60px;">PAID!</span><span  style="color: red;font-size: 25px;padding-left: 20px;">Paid Week : '+Math.round(paid_week)+'</span>';
            document.getElementById("paid_week_message").innerHTML=msg;



            var payment_list='<tr>'+
                '<th>ID</th>'+
                '<th>DATE</th>'+
                '<th>TIME</th>'+
                '<th>TUTE STATE</th>'+
                '<th>IS ATTEND</th>'+
                '<th>REMARKS</th>'+
                '<th style="color:red;">IS PAID</th>'+
              '</tr>';
              var increment_no = 1;
              for (var i = data.presence_history.length - 1; i >= 0; i--) {
                let fromated_date=moment(data.presence_history[i].created_at).format('DD/MM/YYYY');
                let fromated_time=moment(data.presence_history[i].created_at).format('hh:mm');

                let startOfMonth = moment().startOf('month').format('DD/MM/YYYY');

                if(data.presence_history[i].student_barcode==student_barcode){
                   presence_state_style='color:green';
                   presence_stat_ = 'YES';
                }else{
                   presence_state_style='color:red';
                   presence_stat_ = 'NOT';
                }

                if(data.presence_history[i].marking_tute_state=='true'){
                   tute_state_style='color:green;';
                   tute_stat_ = 'TAKEN';
                }else{
                   tute_state_style='color:red;';
                   tute_stat_ = 'NOT';
                }
                var payment_state;
                var payment_state_style;
                if(moment(startOfMonth).isSameOrAfter(fromated_date, 'day')){
                  payment_state = 'Paid';
                  payment_state_style='color:green;';
                }else{
                  payment_state = 'Expired';
                  payment_state_style='color:red;';
                }

               payment_list = payment_list+' <tr>'+
                '<td style="text-align: center;padding-right:5px;">'+increment_no+'</td>'+
                '<td style="text-align: right;padding-right:5px;">'+fromated_date+'</td>'+
                '<td style="text-align: right;padding-right:5px;">'+fromated_time+'</td>'+
                '<td style="text-align: right;padding-right:5px;'+tute_state_style+'">'+tute_stat_+'</td>'+
                '<td style="text-align: right;padding-right:5px;'+presence_state_style+'">'+'DAY-'+increment_no+' :'+presence_stat_+'</td>'+
                '<td style="text-align: right; padding-right:5px;">'+data.presence_history[i].marking_remarks+'</td>'+
                '<td style="text-align: center;padding-right:5px;color:green;">YES</td>'+
              '</tr>';
              increment_no=increment_no+1;

              }
              $("#studentscss").html(payment_list);
              document.getElementById("invoice_student_id").focus();
              document.getElementById("invoice_student_id").value="";

          }else{
            if(data.unpaid=="NOT PAID"){
              let msg ='<span style="color: red;font-size: 35px;font-weight: 900px;padding-left: 60px;">NOT PAID!</span>';
              document.getElementById("paid_week_message").innerHTML=msg;
                 var payment_list='<tr>'+
                '<th>ID</th>'+
                '<th>DATE</th>'+
                '<th>TIME</th>'+
                '<th>TUTE STATE</th>'+
                '<th>IS ATTEND</th>'+
                '<th>REMARKS</th>'+
                '<th style="color:red;">IS PAID</th>'+
              '</tr>';
              var increment_no = 1;
              playWaringSound();
              for (var i = data.presence_history.length - 1; i >= 0; i--) {
                
                let fromated_date=moment(data.presence_history[i].created_at).format('DD/MM/YYYY');
                let fromated_time=moment(data.presence_history[i].created_at).format('hh:mm');
                let startOfMonth = moment().startOf('month').format('DD/MM/YYYY');

                if(data.presence_history[i].student_barcode==student_barcode){
                   presence_state_style='color:green';
                   presence_stat_ = 'YES';
                }else{
                   presence_state_style='color:red';
                   presence_stat_ = 'NOT';
                }

                if(data.presence_history[i].marking_tute_state=='true'){
                   tute_state_style='color:green;';
                   tute_stat_ = 'TAKEN';
                }else{
                   tute_state_style='color:red;';
                   tute_stat_ = 'NOT';
                }

                var payment_state;
                var payment_state_style;
                if(moment(startOfMonth).isSameOrAfter(fromated_date, 'day')){
                  payment_state = 'Paid';
                  payment_state_style='color:green;';
                }else{
                  payment_state = 'Expired';
                  payment_state_style='color:red;';
                }

               payment_list = payment_list+' <tr>'+
                '<td style="text-align: center;padding-right:5px;">'+increment_no+'</td>'+
                '<td style="text-align: right;padding-right:5px;">'+fromated_date+'</td>'+
                '<td style="text-align: right;padding-right:5px;">'+fromated_time+'</td>'+
                '<td style="text-align: right;padding-right:5px;'+tute_state_style+'">'+tute_stat_+'</td>'+
                '<td style="text-align: right;padding-right:5px;'+presence_state_style+'">'+'DAY-'+increment_no+' :'+presence_stat_+'</td>'+
                '<td style="text-align: right; padding-right:5px;">'+data.presence_history[i].marking_remarks+'</td>'+
                '<td style="text-align: center;padding-right:5px;color:red;">NOT PAID</td>'+
              '</tr>';
              increment_no=increment_no+1;

              }
              $("#studentscss").html(payment_list);
              document.getElementById("invoice_student_id").style.display="none";
              document.getElementById("invoice_student_id_labal").style.display="none";
              document.getElementById("entry_without_payement").style.display="block";
              document.getElementById("entry_without_payement_cancel").style.display="block";
              document.getElementById("entry_without_payement").focus();
              document.getElementById("marking_remarks").innerHTML="NOT PAID, BUT ACCEPTED.";
              document.getElementById("form_background").style.backgroundColor="#FFD5D5";




            }else{
              document.getElementById("invoice_student_id").style.backgroundColor="#FF6666";
              errorAlert("error",data.error);
            }
            
          }
        }
      });
    }

    function entryWithoutPayment(){
      let msg ='<span style="color: green;font-size: 35px;font-weight: 900px;padding-left: 60px;">ACCEPTED!</span>';
      document.getElementById("paid_week_message").innerHTML=msg;
      document.getElementById("invoice_student_id").style.display="block";
      document.getElementById("invoice_student_id_labal").style.display="block";
      document.getElementById("entry_without_payement").style.display="none";
      document.getElementById("entry_without_payement_cancel").style.display="none";
      document.getElementById("invoice_student_id").focus();

      entryWithoutPaymentAjax();
    }
    function payWithoutPaymentCancel(){
      document.getElementById("form_background").style.backgroundColor="";
      let msg ='<span style="color: red;font-size: 35px;font-weight: 900px;padding-left: 60px;">REGECTED!</span>';
      document.getElementById("paid_week_message").innerHTML=msg;
      document.getElementById("invoice_student_id").style.display="block";
      document.getElementById("invoice_student_id_labal").style.display="block";
      document.getElementById("entry_without_payement").style.display="none";
      document.getElementById("entry_without_payement_cancel").style.display="none";
      $('#invoice_student_id').val("");
      document.getElementById("invoice_student_id").focus();
      document.getElementById("form_background").style.backgroundColor="#FFD5D5";
      document.getElementById("marking_remarks").innerHTML="";
    }

    function entryWithoutPaymentAjax(){
        var _token                  = $("input[name='_token']").val();
        var created_by              = document.getElementById("created_by").value;
        var marking_operator_id     = document.getElementById("created_by").value;
        var marking_tute_state      = document.getElementById("marking_tute_state").checked;
        var marking_remarks         = document.getElementById("marking_remarks").value;
        var marking_lecture_title   = document.getElementById("invoice_lecture_title").value;
        var invoice_lecture_id      = document.getElementById("invoice_lecture_id").value;
        var student_barcode         = $('#invoice_student_id').val();
        var marking_institute       = document.getElementById("marking_comp_id").value;

        $.ajax({
          url: "cardmarking/entry/withouthpaid",
          type: "post", //send it through get method
          data: { 
            // marking_student_id: marking_student_id,
            student_barcode:student_barcode,
            _token:_token,
            created_by:created_by,
            marking_operator_id:marking_operator_id,
            marking_tute_state:marking_tute_state,
            marking_remarks:marking_remarks,
            marking_lecture_title:marking_lecture_title,
            marking_institute:marking_institute,
            invoice_lecture_id:invoice_lecture_id,
          },
          success: function(data) {
            if($.isEmptyObject(data.error)){
              playsuccessSound();
            }else{
              document.getElementById("invoice_student_id").style.backgroundColor="#FF6666";
              errorAlert("error",data.error);
            }
          }
      });
            $('#invoice_student_id').val("");
            document.getElementById("marking_remarks").innerHTML="";
    }

    function errorAlert(type,message){
      if(type=="error"){
        $("<div style='color:red;'>"+message+"</div>").dialog({
        minHeight: 200,
        minWidth:400,
        modal: true
      });
      }else{
        $("<div style='color:green;'>"+message+"</div>").dialog({
        minHeight: 200,
        minWidth:400,
        modal: true
      });
      }
      
    }


    function onLoadPage(){
      $.ajax({
        url: "/invoice/lectures",
        cache: false,
        success: function(e){
          var lec_list=[];
          if(e.lecture_list.length==0){
          }else{
            for (var i = e.lecture_list.length - 1; i >= 0; i--) {
              lec_list[i] = ""+e.lecture_list[i].lecture_name;
            }
            $(function() {
                $( "#invoice_lecture_title" ).autocomplete({
                   source: lec_list
                });
             });
          }
        }
        });
      }


      function getLecInfo(){
        $('#lec_state').val("0");
        var _token = $("input[name='_token']").val();
        var selected_lecture_name = document.getElementById("invoice_lecture_title").value;
        $.ajax({
          url: "/invoice/lecture_price_filler",
          type: "post", //send it through get method
          data: { 
            _token:_token,
            selected_lecture_name:selected_lecture_name
          },
            success: function(data) {
              if($.isEmptyObject(data.error)){
              document.getElementById("invoice_lecture_id").value=data.lecture_list.id;
              document.getElementById("invoice_lecture_title").style.backgroundColor="#C9FEB4";
              document.getElementById("invoice_lecture_title").readOnly=true;
              document.getElementById("invoice_student_id").focus();
            }else{
              document.getElementById("invoice_lecture_title").style.backgroundColor="#FF6666";
            }
            }
        });
      }

      function ajaxPayment(){
        var _token                  = $("input[name='_token']").val();
        var invoice_student_id      = document.getElementById("invoice_student_id").value;
        var invoice_lecture_title   = document.getElementById("invoice_lecture_title").value;
        var invoice_amount_received = Number($('#invoice_amount_received').val());
        var invoice_amount          = Number($('#invoice_amount').val());
        var invoice_amount_due      = Number($('#invoice_amount_due').val());
        var invoice_type            = $('#invoice_type').val();
        var created_by              = document.getElementById("created_by").value;
        var marking_institute       = document.getElementById("marking_comp_id").value;

        
        $.ajax({
          url:"invoice/payment",
          type:"post",
          data: {
            _token:_token,
            invoice_student_id:invoice_student_id,
            invoice_lecture_title:invoice_lecture_title,
            invoice_amount_received:invoice_amount_received,
            invoice_amount:invoice_amount,
            invoice_amount_due:invoice_amount_due,
            invoice_type:invoice_type,
            created_by:created_by,
            institute:institute
          },
          success: function(data){
            if($.isEmptyObject(data.error)){
              alert("Balance : "+invoice_amount_due +"\n"+"Payment Successfull!");
              location.reload();
            }else{
              errorAlert("error",data.error);
            }
          }
        });
      }

      function presshEnter(){
        alert("shoud be handle!");
      }

      function playsuccessSound() {
          var sound = document.getElementById("audio_success");
          sound.play();
      }

      function playWaringSound() {
        document.getElementById("invoice_student_id").focus();

        sound = document.getElementById("audio_warning");
            sound.play();
      }
    </script>

  </script>

</body>
</html>
