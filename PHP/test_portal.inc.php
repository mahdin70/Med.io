<!DOCTYPE html>
<html>
<head>
<style>
table {

    border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>


<?php
    session_start();
    ?>
    <?php
    require '../SQL/dbConnect.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
function sendMail($email,$date,$service)
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
    $mail->Subject = 'Test Confiramtion';
    $mail->Body    = "Please visit on $date for $service";

   

    $mail->send();
    
} catch (Exception $e) {
    echo "<script type='text/javascript'>alert('Mail could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
}
}

if(isset($_POST['category'])){

    require '../SQL/dbConnect.php';
    $category = $_POST['category'];

    $sql = "SELECT * FROM services WHERE category=?";
    $statement = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($statement, $sql)){
        header('Location: ../test_portal.php?error=sqlerror');
        exit();
    }

    else{

        mysqli_stmt_bind_param($statement, "s", $category);
        mysqli_stmt_execute($statement);

        $result_check = mysqli_stmt_get_result($statement);
        $data = array();
        echo "<table class='table table-bordered data_view_table dataTable no-footer'>
            <tr><th>
                Name
            </th>
            <th>
                Category
            </th>
            <th>
                Fee
            </th>
            </tr>";
            while($row = mysqli_fetch_array($result_check)) {
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Category'] . "</td>";
                echo "<td>" . $row['Fee'] . "</td>";
                echo "</tr>";

                $data['Name'] = $row['Name'];
              }
            json_encode(array($data));
            echo "</table>";
            mysqli_close($conn);
    }

    
}


if(isset($_POST['test-form-submit'])){
    require '../SQL/dbConnect.php';
    $category = $_POST['category'];
    $service = $_POST['serviceName'];
    $date = $_POST['test-date'];
    $email=$_SESSION['patientEmail'];

    if(!(isset($_SESSION['patientloggedin']))){
        header("Location: ../Login.php?error=notloggedin");
        exit();
    }

    else if(empty($category) || empty($service) || empty($date)){
        header("Location: ../test_portal.php?error=emptyfields");
        exit();
    }else{

        $patientID = $_SESSION['patientID'];
        $sql = "INSERT INTO servicesrequest (Service, PatientID, Date, Status) VALUES (?,?,?,0)";

        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $sql)){

            $err = mysqli_stmt_error($statement);

            header("Location: ../test_portal.php?error=sqlerror".$err);
            exit();
        }else{

            mysqli_stmt_bind_param($statement, "sss", $service, $patientID, $date);
            mysqli_stmt_execute($statement);
            sendMail($email,$date,$service);
            header("Location: ../test_portal.php?request=success");
            exit();
        }
    }

}
?>

</body>
</html>