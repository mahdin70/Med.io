<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['Doctorloggedin'])){
      header("Location: ../Med.io/Doctor_login.php");
    exit();
    }
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
    <title>MED.IO</title>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width=device-width initial-scale=1" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="icon" href="./assets/images/med-io-img.png">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>

    <!--CSS FILE--->
    
    <link rel="stylesheet" href="assets/styles/Doctor_portal_styles.css">
    <title>Med.io</title>
    </head>
    <body>
        <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope"></i> <a href="mailto:hasnainkabir@iut-dhaka.edu">Mail</a>
            <i class="bi bi-phone"></i>+8801747116015
        </div>
        </div>
    </div>
    <!--Header-->

    <header id="header" class="fixed-top">

        <div class="container d-flex align-items-center">
            
            <a href="Doctor_portal.php" class="logo me-auto"><img src="assets/images/med-io-img.png" alt="" class="img-fluid"></a>
            
        <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          
          <li><a class="nav-link scrollto active" href="Doctor_portal.php">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="assets/Doctor_logout.php" class="logout-btn scrollto" id="logout-btn">Logout</a>
        </div>
    </header>

        <!--Cover-->
        <section id="cover" class="d-flex align-items-center">
      <div class="container">
        <h1>Appointment | List</h1>
      </div>
    </section>
   <style>
    .contain h1{
      margin: 0;
    font-size: 30px;
    font-weight: 500;
    line-height: 56px;
    text-transform: uppercase;
    color: #2c4964;
    margin-left: 6%;
    }
   </style>
    <div class="contain">
<h1>Upcoming Appointments</h1><br>
</div>
    <style>
.card {
  border:darkblue;
    border-radius: 10px;
    transition: all 1s;
    cursor: pointer;
    color: #000000;
    background: #Add8e6;
    margin-left: 5%;
    text-indent: 50px;
    -webkit-box-shadow: 3px 5px 17px -4px #777777;
    box-shadow: 3px 5px 17px -4px #777777;
    line-height: 20px;
}



.container {
  padding: 2px 2px;
}
</style>

<?php

			include_once("SQL/dbconnect.php");
            $ID= $_SESSION['DoctorID'];
            date_default_timezone_set('Asia/Dhaka');
                $date=date("Y-m-d");
                $newdate = date("Y-m-d",strtotime ( '-3 day' , strtotime ( $date ) )) ;
			$sql = "SELECT ID,name, age, gender,Phone_number,date,message,Previous_Medical_History,Vaccination_Status FROM requests,patient where DoctorID='$ID' and PatientID=ID and date>'$date' order by date";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {

			?>
<div class="card">
<div class="container">
  <h4><?php echo $record['date']; ?></h4>
  <p class="Contact">Patient ID: <?php echo $record['ID'];?>,&emsp;Name: <?php echo $record['name'];?></p>
  
  <p class="Contact">Message: <?php if($record['message']==null){echo 'null';}else{echo $record['message'];};?></p>
  <p class="Contact">Gender: <?php echo $record['gender'];?>,&emsp;Age: <?php echo $record['age'];?></p>
  
  <p class="Contact">Previous Medical History(if any): <?php if($record['Previous_Medical_History']==null){echo 'null';}else{echo $record['Previous_Medical_History'];};?></p>
  <p class="Contact">Vaccination Status: <?php if($record['Vaccination_Status']==null){echo 'null';}else{echo $record['Vaccination_Status'];};?></p>
 
  <p class="Contact">Contact Info: <?php echo $record['Phone_number'];?>
          </p>
  
</div>
</div>
<br>,<br><?php } ?><br><br>
<div class="contain">
<h1>Past Appointments(Last 3 days)</h1><br>
</div>
<?php

			$sql = "SELECT ID,name, age, gender,Phone_number,date,message,Previous_Medical_History,Vaccination_Status FROM requests,patient where DoctorID='$ID' and PatientID=ID and date<'$date' and date>'$newdate' order by date";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {

			?>
<div class="card">
<div class="container">
  <h4><?php echo $record['date']; ?></h4>
  <p class="Contact">Patient ID: <?php echo $record['ID'];?>,&emsp;Name: <?php echo $record['name'];?></p>
  
  <p class="Contact">Message: <?php if($record['message']==null){echo 'null';}else{echo $record['message'];};?></p>
  <p class="Contact">Gender: <?php echo $record['gender'];?>,&emsp;Age: <?php echo $record['age'];?></p>
  
  <p class="Contact">Previous Medical History(if any): <?php if($record['Previous_Medical_History']==null){echo 'null';}else{echo $record['Previous_Medical_History'];};?></p>
  <p class="Contact">Vaccination Status: <?php if($record['Vaccination_Status']==null){echo 'null';}else{echo $record['Vaccination_Status'];};?></p>
 
  <p class="Contact">Contact Info: <?php echo $record['Phone_number'];?>
          </p>
  
</div>
</div>
<br><br>
<?php }?>
