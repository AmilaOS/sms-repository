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
                var room_number = $("input[name='room_number']").val();
                var room_name = $("input[name='room_name']").val();
                var room_student_amount = $("input[name='room_student_amount']").val();
                var room_description = $('#room_description').val();
                var room_category = $('#room_category').find(":selected").text();
                var room_institute = "COMPANY_ID";

                $.ajax({
                    url: "/classroom",
                    type:'POST',
                    data: {
                        _token:_token,
                        room_number:room_number,
                        room_name:room_name,
                        room_student_amount:room_student_amount,
                        room_description:room_description,
                        room_category:room_category,
                        room_status:room_status,
                        room_institute:room_institute
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
