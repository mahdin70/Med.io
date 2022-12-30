<?php

function calculate_age($dob)
{
    $age=(date('Y') - date('Y',strtotime($dob)));
    return $age;
}

function function_alert($message) {
      
    // Display the alert box 
    echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/Med.io/Doctor_signup.php';</script>";
}
function function_alert2($message) {
      
    // Display the alert box 
    echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/Med.io/Doctor_login.php';</script>";
}

function checkPassword($pwd) {
    $message = "";

    if (strlen($pwd) < 8) {
        $message = "Password too short!";
    }

    else if (!preg_match("#[0-9]+#", $pwd)) {
        $message = "Password must include at least one number!";
    }

    else if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        $message = "Password must include at least one letter!";
    }     

    return ($message);
}
if(isset($_POST["Doctor_signup-submit"])){
    require '../SQL/dbConnect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['confirm_password'];
    $date_of_birth = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $age = calculate_age($date_of_birth);
    $place_of_birth = $_POST['birth_place'];
    $Instituitional_background = $_POST['Instituitional_background'];
    $Department = $_POST['Department'];
    $phone_number=$_POST['Phone_number'];

    if(empty($name) ||empty($email) ||empty($password) ||empty($conf_password) ||empty($date_of_birth) ||
    empty($gender) ||is_null($age) ||empty($place_of_birth)||empty($Department)|| empty($phone_number)){
        function_alert("Empty fields");
    }
    else if(checkPassword($password)){
        function_alert(checkPassword($password));
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        function_alert("Incorrect Email format");
    }
    
    elseif($password !== $conf_password){
        function_alert("Passwords do not match");
    }

    else{
        $sql = "SELECT Email FROM Doctor WHERE Email=?";
        $statement = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../Doctor_signup.php?error=sqlerror1");
            exit();
        }
        else{
            mysqli_stmt_bind_param($statement, "s", $email);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);
            $result_check = mysqli_stmt_num_rows($statement);

            if($result_check>0){
                function_alert("Email Taken");
            }
            
            else{

                $sql = "INSERT INTO Doctor (Name, Email, Password, Gender, Birth_date,
                Age, Birth_place, Department,Instituitional_background,Phone_number,Approved) VALUES (?,?,?,?,?,?,?,?,?,?,0)";
                $statement = mysqli_stmt_init($conn);
        
                if(!mysqli_stmt_prepare($statement, $sql)){
                    $err = mysqli_stmt_error($statement);
                    header("Location: ../Doctor_signup.php?error=sqlerror".$err);
                    exit();
                }
                else{

                    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                    mysqli_stmt_bind_param($statement, "ssssssssss", $name, $email, $hashed_password,
                                        $gender, $date_of_birth, $age, $place_of_birth, $Department, $Instituitional_background,$phone_number);
                    mysqli_stmt_execute($statement);
                    function_alert2("Approval Pending, You will be notified via email when your account is approved");
                    
                }
            }
        }
    }

    //mysqli_stmt_close($statement);
    mysqli_close($conn); 

}
else
{
    header("Location: ../Doctor_signup.php");
    exit();

}
?>