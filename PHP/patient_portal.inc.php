<?php
    session_start();
    ?>
    <?php
    require '../SQL/dbConnect.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
function sendMail($email,$date,$doctor)
{
require '../PHP/PHPMailer/Exception.php';
require '../PHP/PHPMailer/PHPMailer.php';
require '../PHP/PHPMailer/SMTP.php';
$mail=new PHPMailer(TRUE);
try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'med.io021670@gmail.com';                     //SMTP username
    $mail->Password   = 'AOHEKdVsnXhb3xqZ';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('med.io021670@gmail.com', 'Med.io');
    $mail->addAddress($email);     //Add a recipient
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Appointment Confirmation';
    $mail->Body    = "Appointment confirmed on $date with $doctor";

   

    $mail->send();
    
} catch (Exception $e) {
    echo "<script type='text/javascript'>alert('Mail could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
}
}
    
   
    if (isset($_POST["appointment-submit"])) {
        

        $date = $_POST["appointment-date"];
        $department = $_POST["department"];
        $message = $_POST["message"];
        $doctor = $_POST["doctorName"];
        $doctorID = "";
        $email=$_SESSION['patientEmail'];

        if(!(isset($_SESSION['patientloggedin']))){
            header("Location: ../Login.php?error=notloggedin");
            exit();
        }

        else if(empty($date) || empty($department)){
            header("Location: ../patient_portal.php?error=emptyfields");
            exit();
        }else{

            $sql2 = "SELECT ID FROM doctor WHERE Name=? ";
            $statement = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($statement, $sql2)){

                $err = mysqli_stmt_error($statement);

                header("Location: ../patient_portal.php?error=sqlerror2".$err);
                exit();
            }else{

                mysqli_stmt_bind_param($statement, "s", $doctor);
                mysqli_stmt_execute($statement);

                $result_check = mysqli_stmt_get_result($statement);
                $row = mysqli_fetch_assoc($result_check);
                $doctorID = $row['ID'];

                $patientID = $_SESSION['patientID'];
            
                $sql = "INSERT INTO requests (PatientID, date, message, department, Assigned, DoctorID) VALUES (?,?,?,?, 1, ?)";
                $statement = mysqli_stmt_init($conn);
            
                if(!mysqli_stmt_prepare($statement, $sql)){

                    $err = mysqli_stmt_error($statement);

                    header("Location: ../patient_portal.php?error=sqlerror".$err);
                    exit();
                }
                else{

                    mysqli_stmt_bind_param($statement, "sssss", $patientID, $date, $message, $department, $doctorID);
                    mysqli_stmt_execute($statement);
                    sendMail($email,$date,$doctor);

                    header("Location: ../patient_portal.php?appointment=success");
                    exit();
                }

            }

        }
    }

    if(isset($_POST['department'])){
        require '../SQL/dbConnect.php';

        $department = $_POST['department'];

        $sql = "SELECT ID, Name FROM doctor WHERE Department=?";
        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $sql)){
            header('Location: ../patient_portal.php?error=sqlerror');
            exit();
        }
    
        else{
            mysqli_stmt_bind_param($statement, "s", $department);
            mysqli_stmt_execute($statement);
            
            $result_check = mysqli_stmt_get_result($statement);
            
            while($row = mysqli_fetch_array($result_check)) {
                $name = $row['Name'];
                echo"<option value='".$name."'>".$name."</option>";
            }
            mysqli_close($conn);
        }
    }
?>