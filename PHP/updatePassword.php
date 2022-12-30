<?php
session_start();
?>
<?php
require "../SQL/dbConnect.php";
function function_alert($message) {
      
    // Display the alert box 
    echo "<script type='text/javascript'>alert('$message');window.history.go(-1);</script>";
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

if(isset($_POST["update_Password"])) 
{
    
    $email=$_SESSION['Email'];
    $reset_token=$_SESSION['reset_token'] ;
    $password = $_POST["password"];
    

    if(empty($email) || empty($reset_token) || empty($password)){
        header("Location: ./updatePassword.php?error=emptyfields&mail=".$email);
        exit();
    }
    
    else if(checkPassword($password)){
        function_alert(checkPassword($password));
    }

    else{

        $hashed_password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $sql="UPDATE `patient` SET `Password`=?,`resetToken`=?,`resetTokenExpiry`=? where `email`=?";

        $statement = mysqli_stmt_init($conn);
    

        if(!mysqli_stmt_prepare($statement, $sql))
        {
            $err = mysqli_stmt_error($statement);
            header("Location: ./updatePassword.php?error=sqlerror".$err);
            exit();
        }else
        {
            $nul = NULL;
            mysqli_stmt_bind_param($statement, "ssss", $hashed_password, $nul, $nul, $email);
            mysqli_stmt_execute($statement);
        
            echo "<script type='text/javascript'>alert('Updated Successfully');window.location.href='http://localhost/Med.io/login.php';</script>";
        }
        $statement->close();
    } 
    session_destroy();
   

}
?>