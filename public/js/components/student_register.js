     $(document).ready(function() {
            $("#studentbtn").click(function(e){

                e.preventDefault();
                var student_status = "1";
                if($("input[name='student_status']").val()){
                    student_status = "1";
                }else{
                    student_status = "0";
                }

                var _token = $("input[name='_token']").val();
                var student_name = $("input[name='student_name']").val();
                var student_address = $("input[name='student_address']").val();
                var student_location = $("input[name='student_location']").val();
                var student_age = $("input[name='student_age']").val();
                var student_dob = $("input[name='student_dob']").val();
                var student_nic = $("input[name='student_nic']").val();
                var student_grade = $('#student_grade').find(":selected").text();
                var student_private_contact = $("input[name='student_private_contact']").val();
                var student_guardian_contact = $("input[name='student_guardian_contact']").val();
                var student_type = $('#student_type').find(":selected").text();
                var student_remarks = $('#student_remarks').val();
                var student_gender = $('#student_gender').find(":selected").text();
                var created_by = $("input[name='created_by']").val();
                var student_institute = 'Sample Institune (pvt) Ltd';



                $.ajax({
                    url: "/student",
                    type:'POST',
                    data: {
                        _token:_token,
                        student_name:student_name,
                        student_address:student_address,
                        student_location:student_location,
                        student_age:student_age,
                        student_dob:student_dob,
                        student_nic:student_nic,
                        student_grade:student_grade,
                        student_private_contact:student_private_contact,
                        // teacher_image:teacher_image,
                        student_guardian_contact:student_guardian_contact,
                        student_type:student_type,
                        student_remarks:student_remarks,
                        student_gender:student_gender,
                        student_institute:student_institute,
                        created_by:created_by
                    },
                    success: function(data) {
                        if($.isEmptyObject(data.error)){
                            printSuccessMsg(data);
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });


            });


             function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $(".print-success-msg").css('display','none');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }

            function printSuccessMsg (data) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','none');
                $(".print-success-msg").css('display','block');
                $('#student_id').val(data.student_id);
                document.getElementById("image_upload_modal").click();
                document.getElementById("reset_all").click();
                
                $(".print-success-msg").css('display','block');
            }
             $(window).load(function() {
                    $(".form-horizontal").css('display','block');
            });
        });
