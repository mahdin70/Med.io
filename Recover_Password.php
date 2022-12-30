<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="icon" href="./assets/images/med-io-img.png">
    <link rel="stylesheet" href="assets/styles/login_styles.css">
    <link rel="stylesheet" href="./assets/styles/admin_font.css">
        <title>
            Recover Password
        </title>
    </head>

    <body>

    <div class = "container-fluid">
        <div class = "center">
            <div class = "heading">
                <h3>Email</h3>
            </div>

            <div class = "form-content">

                    <form class="RecoverPassword" action="./PHP/forgotPassword.php" method = "post">

                    <div class = "placeholders">

                        <!--Email-->
                        <input type="text" id = "email" name = "email" placeholder="email"><br><br>

                    </div>
                            
                    <!--Recover-->
                        <button type="submit" name="recover_password" id ="recover_password">Recover</button><br><br>
                            
                    </form>

            </div>

        </div>
    </div>


        

    </body>
</html>