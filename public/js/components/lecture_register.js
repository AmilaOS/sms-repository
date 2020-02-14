        $(document).ready(function() {
            $("#roomsavebtn").click(function(e){
                e.preventDefault();
                var room_status = "1";
                if($("input[name='room_status']").val()){
                    room_status = "1";
                }else{
                    room_status = "0";
                }
                var _token = $("input[name='_token']").val();
                var lecture_name = $("input[name='lecture_name']").val();
                var lecture_status = $("input[name='lecture_status']").val();
                var lecture_start_date = $("input[name='lecture_start_date']").val();
                var lecture_end_date = $("input[name='lecture_end_date']").val();
                var lecture_lecturer = $("input[name='lecture_lecturer']").val();
                var lecture_classroom = $("input[name='lecture_classroom']").val();
                var lecture_hall_operator = $("input[name='lecture_hall_operator']").val();
                var lecture_more_information = $('#lecture_more_information').val();
                var lecture_fee = $("input[name='lecture_fee']").val();
                
                // var room_category = $('#room_category').find(":selected").text();
                var lecture_institute = "AURA";

                $.ajax({
                    url: "/lecture",
                    type:'POST',
                    data: {
                        _token:_token,
                        lecture_name:lecture_name,
                        lecture_status:lecture_status,
                        lecture_start_date:lecture_start_date,
                        lecture_end_date:lecture_end_date,
                        lecture_lecturer:lecture_lecturer,
                        lecture_classroom:lecture_classroom,
                        lecture_more_information:lecture_more_information,
                        lecture_hall_operator:lecture_hall_operator,
                        lecture_institute:lecture_institute,
                        lecture_fee:lecture_fee
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
                $(".print-success-msg").css('display','none');
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
                    $(".form-horizontal").css('display','block');
                    $(".form-horizontal").fadein("slow");
            });
        });
