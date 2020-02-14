<!DOCTYPE html>
<html>
<head>
    <title>Laravel Ajax Validation Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>


<div class="container">
    <h2>Laravel Ajax Validation</h2>


    <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>


    <form>
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>


        <div class="form-group">
            <label>Details:</label>
            <input type="text" name="detail" class="form-control" placeholder="Detail">
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-submit">Submit</button>
        </div>
    </form>
</div>


<script type="text/javascript">


    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var detail = $("input[name='detail']").val();


            $.ajax({
                url: "/my-form",
                type:'POST',
                data: {_token:_token, name:name, detail:detail},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });


        });


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });


</script>


</body>
</html>
