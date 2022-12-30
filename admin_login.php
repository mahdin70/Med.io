<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width-device-width initial-scale=1" >
    <link rel="stylesheet" href="./assets/styles/adminLogin_styles.css">
    <link rel="icon" href="./assets/images/med-io-img.png">


    <title>Admin Login Page</title>
    </head>
    <body>
        <div class="center">
            <h1>Admin Login</h1>
            <form class="Admin_form-login" action="./PHP/Admin_login.inc.php" method = "post">
                <div class="txt_field"> 
                    <input type="text" name="user" required>
                    <label>Username</label>
                </div>                            
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <input type="submit" name="Admin_login-submit" value="Login">
            </form>
        </div>
    </body>
</html>
