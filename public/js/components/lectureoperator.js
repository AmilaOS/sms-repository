      $(document).ready(function() {
            $("#roomsavebtn").click(function(e){
                e.preventDefault();
                var lecture_hall_operator_status = "1";
                if($("input[name='lecture_hall_operator_status']").val()){
                    lecture_hall_operator_status = "1";
                }else{
                    lecture_hall_operator_status = "0";
                }
                var _token = $("input[name='_token']").val();
                var lecture_hall_operator_name = $("input[name='lecture_hall_operator_name']").val();
                var lecture_hall_operator_contact = $("input[name='lecture_hall_operator_contact']").val();
                var lecture_hall_operator_lec_room = $("input[name='lecture_hall_operator_lec_room']").val();
                var lecture_hall_operator_info = $("input[name='lecture_hall_operator_info']").val();
                var lecture_hall_operator_status = $("input[name='lecture_hall_operator_status']").val();
                var created_by = $("input[name='created_by']").val();

                // var lecture_hall_operator = $("input[name='lecture_hall_operator']").val();
                // var lecture_more_information = $('#lecture_more_information').val();
                // var room_category = $('#room_category').find(":selected").text();

                $.ajax({
                    url: "/lectureoperator",
                    type:'POST',
                    data: {
                        _token:_token,
                        lecture_hall_operator_name:lecture_hall_operator_name,
                        lecture_hall_operator_contact:lecture_hall_operator_contact,
                        lecture_hall_operator_lec_room:lecture_hall_operator_lec_room,
                        lecture_hall_operator_info:lecture_hall_operator_info,
                        lecture_hall_operator_status:lecture_hall_operator_status,
                        created_by:created_by
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

                $('#lecture_hall_operator_name').val('');
                $('#lecture_hall_operator_contact').val('');
                $('#lecture_hall_operator_lec_room').val('');
                $('#lecture_hall_operator_info').val('');

                $(".print-success-msg").css('display','block');
            }
        });

