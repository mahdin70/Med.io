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
        <h1>Doctor | Dashboard</h1>
        <a href="#intro" class="btn-My-Profile scrollto">My Profile</a><br>
        <a href="Appointment_list.php" class="btn-My-Profile ">Appointment List</a>
      </div>
    </section>

    <main id="main">

        <!---Introduction-->


    <section class="intro" id="intro">

<div class="container-fluid">
  <div class="row">
      <div class="col-xl-5 col-lg-6 img-box d-flex justify-content-center align-items-stretch position-relative">
      </div>

      <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
        <h3>My Profile</h3><br><br>

        <h4 class="Name">Name</h4>
          <p class="description"><?php echo $_SESSION['DoctorName'];?>
          </p>
        

          <h4 class="Age">Age</h4>
          <p class="description"><?php echo $_SESSION['DoctorAge'];?>
          </p>
          
          <h4 class="Birth_date">Birth Date</h4>
          <p class="description"><?php echo $_SESSION['DoctorBirth_date'];?>
          </p>
          <h4 class="Birth_place">Birth Place</h4>
          <p class="description"><?php echo $_SESSION['DoctorBirth_place'];?>
          </p>
        
          <h4 class="Instituition">Instituition</h4>
          <p class="description"><?php echo $_SESSION['DoctorInstituitional_background'];?>
          </p>
         
          <h4 class="Department">Department</h4>
          <p class="description"><?php echo $_SESSION['DoctorDepartment'];?>
          </p>
        
          <h4 class="Gender">Gender</h4>
          <p class="description"><?php echo $_SESSION['DoctorGender'];?>
          </p>
        
          
          <a href="Doctor_profile_update.php" class="update-btn" id="update_btn">Update Profile</a>
    </section>
      </div>

        

      
  </div>
</div>
</section>
    <head>	

			<!--Footer-->
            <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col footer-address">
              <h3>Med.io</h3>
              <p>Address: </p>
              <p>Contact: +8801747116015, +8801830638230, +8801764257445
              </p>
          </div>
          <div class="col footer-icon-links">
              <h5>Icons by</h5>
              <a href="https://freeicons.io">Freeicons</a>
          </div>
        </div>
      </div>
    </footer>
    </head>

   
</html>