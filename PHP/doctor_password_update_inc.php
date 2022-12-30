<?php
    session_start();
?>
<?php

function function_alert($message) {
      
    // Display the alert box 
    echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/Med.io/Doctor_portal.php';</script>";
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
if(isset($_POST["doctor_password_update-submit"])){
    require "../SQL/dbConnect.php";

    $old_password = $_POST['Old_Password'];
    $new_password=$_POST['New_Password'];
    $ID=$_SESSION['DoctorID'];

    if(empty($old_password) || empty($new_password)){
        function_alert("Empty fields password");
    }
    else if(checkPassword($new_password)){
        function_alert(checkPassword($new_password));
    }
    else{
        
        $sql = "SELECT * FROM Doctor WHERE ID=?";
        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../Doctor_login.php?error=sqlerror");
            exit();
        }

        else{

            mysqli_stmt_bind_param($statement, "s", $ID);
            mysqli_stmt_execute($statement);

            $result_check = mysqli_stmt_get_result($statement);

            if($row = mysqli_fetch_assoc($result_check)){
                
                $password_check = password_verify($old_password, $row['Password']);

                if($password_check == false){
                    function_alert("Wrong Password");

                }
                else if($password_check == true){
                    $sql1 = "Update doctor Set Password=? where ID=? ";
                    $statement1 = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($statement1, $sql1)){
            header("Location: ../Doctor_login.php?error=sqlerror");
            exit();
            }
            else{
                
                $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);
                

                    mysqli_stmt_bind_param($statement1, "ss", $hashed_password,$ID);
                    mysqli_stmt_execute($statement1);
                    function_alert("Password Updated");
            }

                }

            }else{

                function_alert("Error");

            }
        }
    }

}else{
    header("Location: ../Doctor_profile_update.php");
    exit();
}

?>