<?php
    session_start();
?>
<?php
function function_alert($message) {
      
    // Display the alert box 
    echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/Med.io/Doctor_portal.php';</script>";

}

if(isset($_POST["doctor_profile_update-submit"])){

    require "../SQL/dbConnect.php";
    $Institution1=$_SESSION['DoctorInstituitional_background'];
    $Institution2=$_POST['Institution'];
    $Institution3=$Institution1.",".$Institution2;
    $department = $_POST['department'];
    $ID=$_SESSION['DoctorID'];

    $sql = "Update doctor Set Instituitional_background=?,department=? where ID=? ";
        $statement = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../Doctor_profile_update.php?error=sqlerror");
            exit();
        }

        else{

            mysqli_stmt_bind_param($statement, "sss", $Institution3,$department,$ID);
            mysqli_stmt_execute($statement);
                    $_SESSION['DoctorInstituitional_background'] = $Institution3;
                    $_SESSION['DoctorDepartment'] = $department;

            function_alert("Profile Updated");
                    
}

 mysqli_stmt_close($statement);
    mysqli_close($conn); 

}
else
{
    header("Location: ../Doctor_profile_update.php");
    exit();

}

?>