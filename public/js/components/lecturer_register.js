     $(document).ready(function() {
            $("#roomsavebtn").click(function(e){

                e.preventDefault();
                var teacher_status = "1";
                if($("input[name='teacher_status']").val()){
                    room_status = "1";
                }else{
                    room_status = "0";
                }

                var _token = $("input[name='_token']").val();
                var teacher_title = $('#teacher_title').find(":selected").text();
                var teacher_name = $("input[name='teacher_name']").val();
                var teacher_dob = $("input[name='teacher_dob']").val();
                var teacher_group = $('#teacher_group').find(":selected").text();
                var revenue_percentage = $("input[name='revenue_percentage']").val();
                var teacher_address = $("input[name='teacher_address']").val();
                var teacher_mobile = $("input[name='teacher_mobile']").val();
                var teacher_subject = $("input[name='teacher_subject']").val();
                // var teacher_image = $("input[name='teacher_image'").val();
                var teacher_bank_account = $("input[name='teacher_bank_account']").val();
                var teacher_notes = $('#teacher_notes').val();
                var teacher_nic = $("input[name='teacher_nic']").val();
                var teacher_institute = "AURA";


                $.ajax({
                    url: "/lecturer",
                    type:'POST',
                    data: {
                        _token:_token,
                        teacher_status:teacher_status,
                        teacher_title:teacher_title,
                        teacher_name:teacher_name,
                        teacher_dob:teacher_dob,
                        teacher_group:teacher_group,
                        revenue_percentage:revenue_percentage,
                        teacher_address:teacher_address,
                        teacher_mobile:teacher_mobile,
                        teacher_subject:teacher_subject,
                        // teacher_image:teacher_image,
                        teacher_bank_account:teacher_bank_account,
                        teacher_notes:teacher_notes,
                        teacher_nic:teacher_nic,
                        teacher_institute:teacher_institute

                    },
                    success: function(data) {
                        if($.isEmptyObject(data.error)){
                            printSuccessMsg();
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });


            });


            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $(".print-success-msg").css('display','hide');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }

            function printSuccessMsg () {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','none');
                $(".print-success-msg").css('display','block');

                $('#room_number').val('');
                $('#room_name').val('');
                $('#room_student_amount').val('');
                $('#room_description').val('');

                $(".print-success-msg").css('display','block');
            }
             $(window).load(function() {
                    $(".input_mask").css('display','block');
                    $(".input_mask").fadein("slow");
            });
        });
