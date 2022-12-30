<?php

if(isset($_POST["Admin_login-submit"])){

    require "../SQL/dbConnect.php";

    $user = $_POST['user'];
    $password = $_POST['password'];

        if(empty($user) || empty($password)){
        header("Location: ../admin_login.php?error=emptyfields&mail=".$user);
        exit();
    }

    else{
        $sql = "SELECT * FROM admin WHERE User=? ";
        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../admin_login.php?error=sqlerror");
            exit();
        }

        else{

            mysqli_stmt_bind_param($statement, "s", $user);
            mysqli_stmt_execute($statement);

            $result_check = mysqli_stmt_get_result($statement);

            if($row = mysqli_fetch_assoc($result_check)){
                
                if($password == $row['Password']){
                    $password_check = true;
                }
                else{
                    $password_check = false;
                }

                if($password_check == false){
                    header("Location: ../admin_login.php?error=wrongpassword");
                    exit();
                }
                else if($password_check == true){
                    echo "<script>alert('You Have Logged In as an Admin!')</script>";
                    session_start();
                    
                    $_SESSION['adminUser'] = $row['User'];
                    $_SESSION['adminPassword'] = $row['Password'];

                    
                    header("Location: ../admin/index.php");
                    exit();
                }
            }
            else{
                header("Location: ../admin_login.php?error=usernotfound");
                exit();
            }
        }
    }
}
else{
    header("Location: ../admin_login.php");
    exit();
}