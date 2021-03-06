<?php

    session_start();
    
    if (isset ($_POST['Login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        //periksa login
        if (($user == "fitri" && $pass == "12345") OR ($user == "admin" && $pass == "12345")) {
            //menciptakan session
            $_SESSION['login'] = $user;
            $_SESSION['role'] = "guest";
            
            if($user == "admin"){
                $_SESSION['role'] = "admin";
            }
            
            //menuju ke halaman product
            header("location:admin/index.php");
        }else{
            
            header("location:login.php"); 
        }
    } 
    
    else {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="style/bootstrap-5.0.2-dist/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous"> -->
            <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
            <link rel="shortcut icon" href="images/forexy.jpg" type="image/x-icon" >

        </head>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 d-none d-md-block image-container">
                        <img src="images/flower.jpg" alt="" id="image-container">
                    </div>
                    <div class="col-lg-6 col-md-6 form-container">
                        <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                            <div class="logo mb-3">
                                <img src="images/963.jpg" alt="forexy" width="120px" height="120px">
                            </div>
                            <div class="heading mb-4">
                                <h4>Login into your account</h4>
                            </div>
                            <form action = "" method = "post">
                                <div class="form-input">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <input type="text" name = "user" placeholder="Username" required>
                                </div>
                                <div class="form-input">
                                    <span><i class="fa fa-lock"></i></span>
                                    <input type="password" name = "pass" placeholder="Password" required>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 d-flex">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cb1">
                                            <label class="custom-control-label text-white" for="cb1">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="forget-link">Forget Password</a>
                                    </div>
                                </div>
                                <div class="text-left mb-3">
                                    <button type="submit" name="Login" class="btn">Login</button>
                                </div>
                                <div class="text-center mb-2">
                                    <div class="mb-3" style="color: #E1E1E1">Or login with</div>
                                    <a href="" class="btn btn-social btn-facebook">facebook</a>
                                    <a href="" class="btn btn-social btn-google">google</a>
                                    <a href="" class="btn btn-social btn-twitter">twitter</a>
                                </div>
                                <div style="color: #E1E1E1;">Don't have an account
                                <a href="#" class="register-link">Register here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php 
    }

?>
