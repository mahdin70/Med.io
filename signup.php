<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="icon" href="./assets/images/med-io-img.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <!--CSS FILE--->
    <link rel="stylesheet" href="assets/styles/signup_styles.css">
    <link rel="stylesheet" href="assets/styles/admin_font.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Register</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="label">
                    <h2 style="color:black;">SignUp as a Patient</h2>
                    <p>Welcome to Med.io, please provide your details to create an account as a patient.</p>
                </div>
                <div class="main">
                    <!--Signup information-->
                    <form class="form-signup" action="./PHP/signup.inc.php" method="post">
                        <!--Name-->
                        <label for="name">Full Name*</label><br>
                        <input type="text" id="name" name="name"><br>

                        <!--Email-->
                        <label for="email">Email*</label><br>
                        <input type="text" id="email" name="email"><br>

                        <!---Password-->
                        <label for="password">Password*</label><br>
                        <input type="password" id="password" name="password"><br>

                        <label for="confirm_password">Confirm Password*</label><br>
                        <input type="password" id="confirm_password" name="confirm_password"><br>

                        <!--Gender-->
                        <label for="gender">Gender*</label><br>

                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="Male">Male</label><br>

                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="Female">Female</label><br>

                        <!--Date of Birth-->
                        <label for="birth_date">Date Of Birth*</label><br>
                        <input type="Date" name="birth_date" id="birth_date"><br>

                        <!--Phone Number-->
                        <label for="Phone_number">Phone Number*</label><br>
                        <input type="Phone_number" name="Phone_number" id="Phone_number"><br>

                        <!--Place of Birth-->
                        <label for="birth_place">Place Of Birth*</label><br>
                        <input type="text" name="birth_place" id="birth_place"><br>

                        <!--Medical history-->
                        <h3 style="color:black;">Please state if you have any pre-existing conditions,
                            have gone through any major operations previously or
                            anything your doctor should know about. <br>
                            <br>(Keep the field empty if inapplicable).
                        </h3>
                        <label for="medical_history">Previous Medical History</label><br>
                        <input type="text" name="medical_history" id="medical_history"><br>

                        <!--Vaccination Status-->
                        <h3 style="color:black;">Please provide necessary information about your vaccination status. <br>
                            <br>(Keep the field empty if inapplicable).
                        </h3>
                        <label for="vaccination_status">Vaccination status</label><br>
                        <input type="text" name="vaccination_status" id="vaccination_status"><br>

                        <!--Signup Button-->
                        <button type="submit" name="signup-submit" id="signup-submit">Submit</button>
                    </form>
                </div>
            </div>

            <div class="col">
                <img src="./assets/images/signup.jpg" alt="">
            </div>

        </div>
    </div>
    <script src="assets/js/login_and_signup_script.js"></script>

</body>

</html>