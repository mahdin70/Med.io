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
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="assets/doctor_logout.php" class="logout-btn scrollto" id="logout-btn">Logout</a>
        </div>
    </header>

        <!--Cover-->
        <section id="cover" class="d-flex align-items-center">
      <div class="container">
        <h1>Update | Profile</h1>
      </div>
    </section>

    <style>
        .form-content{
                margin-left: 5%;
        }
        .form-content .update_btn{
          font-family: "Raleway", sans-serif;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 35px;
    margin-top: 30px;
    border-radius: 50px;
    transition: 0.5s;
    color: #fff;
    background: #2596be;
        }
        
       
        
        </style>

    <div class = "form-content">
                <form class="form-login" action="PHP/doctor_profile_update.inc.php" method = "post">
                
            <!--Add Institution-->
            <label for="Institution">Instituition*</label><br>
                    <input placeholder="Add Institution" type="text" name = "Institution"><br><br>
                    

            <!--Change Department-->
            <label for="Department">Change Department*</label><br>
            <select name="department" id="department" class="bi bi-chevron-down">
                <option value=""><?php echo $_SESSION['DoctorDepartment'];?></option>
                <option value="Medicine">Medicine</option>
                <option value="Eye Care">Eye Care</option>
                <option value="Psychiatry">Psychiatry</option>
                <option value="Cardiology">Cardiology</option>
                <option value="General Surgeon">General Surgeon</option>
                <option value="Neurology">Neurology</option>
                <option value="E.N.T">E.N.T</option>
                <option value="Orthopedics">Orthopedics
                </option>
                <option value="Gynaecology">Gynaecology</option>
                <option value="Skin and VD">Skin and VD</option>
              </select>
                <br>
            <!--Update-->
            
                <button type="submit" class="update_btn" name="doctor_profile_update-submit" id ="doctor_profile_update-submit">Update</button><br><br>
           
            <br><br><br><br>
            </form>
            </div>


            <div class = "form-content">
                <form class="form-login" action="PHP/doctor_password_update_inc.php" method = "post">
                
            <!--Old Password-->
            <label for="Old Password">Old Password*</label><br>
                    <input placeholder="Old Password" type="password" name = "Old_Password"><br><br>

                     <!--New Password-->
            <label for="New Password">New Password*</label><br>
                    <input placeholder="New Password" type="password" name = "New_Password"><br>
                    

            
            
            <!--Update-->
                <button type="submit" class="update_btn" name="doctor_password_update-submit" id ="doctor_password_update-submit">Update Password</button><br><br>
            
                </div>
            </form>
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