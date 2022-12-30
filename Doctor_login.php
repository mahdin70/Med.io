<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width=device-width initial-scale=1" >
    
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="icon" href="./assets/images/med-io-img.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <!--CSS FILE--->
    <link rel="stylesheet" href="assets/styles/login_styles.css">
    <link rel="stylesheet" href="./assets/styles/admin_font.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title>
            Login
        </title>
    </head>

    <body>

        <div class = "container-fluid">
            <div class = "center">
                <div class = "heading">
                    <h3>Login as doctor</h3>
                    
                </div>
                
                <div class = "form-content">
                <form class="form-login" action="PHP/Doctor_login.inc.php" method = "post">

            <!--Email-->

            <div class = "placeholders">

                    <input placeholder="Email" type="text" name = "email"><br><br>

            <!--Password-->

                    <input placeholder="Password" type="password" name="password"><br><br>
                </div>
            <!--Login-->
                <button type="submit" name="Doctor_login-submit" id ="Doctor_login-submit">Sign In</button><br><br>
                

            </form>
            </div>

            <div class = "rest-contents">

                <div class="forgot-btn">
                <form action="Doctor_RecoverPassword.php">
                        <button type="submit" name="forgot_Password">Forgot Password?</button>
                </form>
                </div>
                
                    <hr class = "my-4">
                <div class = "heading2">
                    <h4>Sign up as doctor!
                    </h4>
                </div>
                
                <div class = "signup-redirect">
                    <form action="Doctor_signup.php">
                    <button type="submit" name="login-page-signup-button">Sign Up</button>
                </form>

                </div>
                
            </div>
            

            </div>
            
        </div>

                

    </body>
</html>
