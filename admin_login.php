<!DOCTYPE html>

<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
               
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <span class="anchor" id="formLogin"></span>

                        <!-- form card login -->
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="mb-0">Login</h3>
                            </div>
                            <div class="card-body">
                                <div autocomplete="off" id="formLogin">
                                    <div class="form-group">
                                        <label for="uname1">Username</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
                                    </div>

                                    <button type="button" id="loginbutton" onclick="login();" class="btn btn-success">Login</button>
                                </div>

                            </div>

                            <!--/card-block-->
                        </div>
                        <br>
                        <div class="alert alert-success" style="display:none;">
                            <strong></strong>
                        </div>
                        <div class="alert alert-danger" style="display:none;">
                            <strong class="loginerrormessage"></strong>
                        </div>
                        <!-- /form card login -->
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->

    <script>
        function login() {

            $('.alert-danger').hide();
            $('.loginerrormessage').html('Both fields are important');

            var uname1 = $('#uname1').val();
            var pwd1 = $('#pwd1').val();

            if (uname1 == '' || pwd1 == '') {

                $('.alert-danger').fadeIn();
                $('.loginerrormessage').html('Both fields are important');
                return;
            }



            $.ajax({
                type: "POST",
                url: "http://localhost/Quickdev%20Solutions/login_api.php",
                data: 'uname1=' + uname1 + '&pwd1=' + pwd1,
                timeout: 10000,
                success: function(response) {
                     
                       if(response != 'false'){
                       
                           window.location = 'edit_website.php';
                       }else{
                       alert('username or password does not exists');
                       }
                  
                },
                error(x, t, r) {
                    if (t == 'timeout') {
                        alert('connection timeout');
                    }
                }
            });

        }

    </script>

</body>

</html>
