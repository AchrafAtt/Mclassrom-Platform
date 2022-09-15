<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= BURL ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BURL ?>assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    

<title>login</title>
</head>
<body>


    <div class="container">
        <div class="text-center">
            <!-- <img src="themes/image/logoB.png" alt="e-marrakech"> -->
            <h3><span>M</span>Classroom</h3>
        </div>
        <div class="rows">
            <div class="image-box">
                <img src="<?= BURL ?>assets/image/login.jpg" alt="login-image">    
            </div>
            <form action="<?php url("auth/check_user") ?>" method="POST">
                <div class="infor">
                    <!-- <div class="email"> -->
                        <label for="email">Username or Email</label>
                        <input type="text" name="username" id="username" >
                    <!-- </div> -->
                    <!-- <div class="pass"> -->
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" >
                    <!-- </div> -->
                    </div>
                    <div class="fob">
                        <a href="<?php url("auth/forget") ?>">Forget Password ?</a>
                        <input type="submit" name="login" value="LOGIN" id="sub">
                    </div>
                    <div class="create">
                        Don't have account ? <span><a href="<?php url("auth/register") ?>">Create one now</a></span>
                    </div>
            </form>
        </div>
    </div>

    

   
    <script src="<?= BURL ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?= BURL ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= BURL ?>assets/js/jquery.bootstrap-growl.min.js"></script>


    <script>

            $("#sub").click(function(){

                $(".bootstrap-growl").remove();

                var username = $('#username').val();
                var pass = $('#pass').val();
                if(username == '' || pass == ''){
                    $.bootstrapGrowl('Please fill all the fields', 
                    {type: 'success',
                    delay: 4000,
                    stackup_spacing: 40,
                    allow_dismiss: false});

                    return false;
                }else{
                    return true;
                }
            });


    </script>
</body>
</html>