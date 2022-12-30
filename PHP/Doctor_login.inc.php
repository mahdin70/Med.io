<?php

function function_alert($message) {
      
    // Display the alert box 
    echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/Med.io/Doctor_login.php';</script>";
}

if(isset($_POST["Doctor_login-submit"])){
    require "../SQL/dbConnect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        function_alert("Empty fields email or password");
    }

    else{
        
        $sql = "SELECT * FROM Doctor WHERE Email=? and Approved=1";
        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../Doctor_login.php?error=sqlerror");
            exit();
        }

        else{

            mysqli_stmt_bind_param($statement, "s", $email);
            mysqli_stmt_execute($statement);

            $result_check = mysqli_stmt_get_result($statement);

            if($row = mysqli_fetch_assoc($result_check)){
                
                $password_check = password_verify($password, $row['Password']);

                if($password_check == false){
                    function_alert("Wrong Password");

                }
                else if($password_check == true){
                    session_start();
                    $_SESSION['DoctorID'] = $row['ID'];
                    $_SESSION['DoctorEmail'] = $row['Email'];
                    $_SESSION['DoctorName'] = $row['Name'];
                    $_SESSION['DoctorBirth_date'] = $row['Birth_date'];
                    $_SESSION['DoctorBirth_place'] = $row['Birth_place'];
                    $_SESSION['DoctorAge'] = $row['Age'];
                    $_SESSION['DoctorGender'] = $row['Gender'];
                    $_SESSION['DoctorInstituitional_background'] = $row['Instituitional_background'];
                    $_SESSION['DoctorDepartment'] = $row['Department'];
                    $_SESSION['Doctorloggedin'] = true;

                    header("Location: ../Doctor_portal.php?login=success");
                    exit();

                }

            }else{

                function_alert("Email not found");

            }
        }
    }

}else{
    header("Location: ../Doctor_login.php");
    exit();
}

?>