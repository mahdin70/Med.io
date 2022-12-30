
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
        <li class="dropdown"><span>Doctor's List</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Doctor_list.php">All Doctors</a></li>
              <li><a href="Medicine_list.php">Medicine</a></li>
              <li><a href="EyeCare_list.php">Eye Care</a></li>
              <li><a href="Psychiatry_list.php">Psychiatry</a></li>
              <li><a href="Cardiaology_list.php">Cardiology</a></li>
              <li><a href="GeneralSurgeon_list.php">General Surgeon</a></li>
              <li><a href="Neurology_list.php">Neurology</a></li>
              <li><a href="E.N.T_list.php">E.N.T</a></li>
              <li><a href="Orthopedics_list.php">Orthopedics</a></li>
              <li><a href="Gynaecology_list.php">Gynaecology
              </a></li>
              <li><a href="Skin&VD_list.php">Skin and VD</a></li>
              
            </ul>
          </li>
        <ul>
          
          <li><a class="nav-link scrollto active" href="patient_portal.php">Home</a></li>
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    
        </div>
    </header>

        <!--Cover-->
        <section id="cover" class="d-flex align-items-center">
      <div class="container">
        <h1>Skin and VD | List</h1>
      </div>
    </section>
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

.card:hover {
  -webkit-box-shadow: 3px 5px 17px -4px #777777;
    box-shadow: 3px 5px 17px -4px #777777
}

.container {
  padding: 5px 5px;
}
</style>

<?php
			include_once("SQL/dbconnect.php");
			$sql = "SELECT ID,name, email, age, gender, Instituitional_Background, department,Phone_number FROM doctor where Approved=1 and department='Skin and VD'";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
<div class="card">
<div class="container">
<h4><?php echo $record['name'];?></h4>
<p class="Contact">Department:&ensp;<?php echo $record['department'];?>
          </p>
          <p class="Contact">Institution:&ensp;<?php echo $record['Instituitional_Background'];?>
          </p>
          <p class="Contact">Gender:&ensp;<?php echo $record['gender'];?>
          </p>
          <p class="Contact">Age:&ensp;<?php echo $record['age'];?>
          </p>
 
  <p class="Contact">Contact Info:&ensp;<?php echo $record['Phone_number'];?>
          </p>
  
</div>
</div>
<br>
<?php } ?>