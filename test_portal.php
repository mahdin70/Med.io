<?php
session_start();
?>


<!DOCTYPE html>
<html>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!--CSS FILE--->
    <link rel="stylesheet" href="assets/styles/Patient_portal_styles.css">
    <link rel="stylesheet" href="./assets/styles/admin_font.css">

        <title>
            Services
        </title>
    </head>

    <body>
        <!--Header-->

    <header id="header" class="fixed-top">

    <div class="container d-flex align-items-center">
    
    <a href="patient_portal.php" class="logo me-auto"><img src="assets/images/med-io-img.png" alt="" class="img-fluid"></a>
    
            <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <!--Admin Portal Added at the Navbar by Mukit-->
            <li><a class="nav-link scrollto active" href="patient_portal.php">Home</a></li>
            <li><a class="nav-link scrollto" href="./Doctor_list.php">Doctors</a></li>

            <!-- <li class="dropdown"><span>Test and service charges</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a class="nav-link scrollto" href="#services">Choose by category</a></li>
                <li><a href="#category">Ambulance</a></li>
                <li><a href="#category">Blood Bank</a></li>
                <li><a href="#category">Colonoscopy</a></li>
                <li><a href="#category">Diagnostic charges</a></li>
                <li><a href="#category">ECG</a></li>
                <li><a href="#category">Echo</a></li>
                <li><a href="#category">Endoscopy</a></li>
                <li><a href="#category">Fibroscan
                </a></li>
                <li><a href="#category">Molecular Diagnostics</a></li>
                <li><a href="#category">Neurology</a></li>
                <li><a href="#category">Opthalmology</a></li>
                <li><a href="#category">Pathology</a></li>
                <li><a href="#category">Radiology</a></li>
                <li><a href="#category">Ultrasound</a></li>
                </ul>
            </li> -->
            
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <a href="#category" class="appointment-btn scrollto"><span class="d-none d-md-inline">Request for a</span> Service</a>

            <?php
            if(isset($_SESSION['patientloggedin'])){
                echo'<a href="assets/logout.php" class="appointment-btn scrollto" id="logout-btn">Logout</a>';
            }else{

                echo'<a href="index.php" class="appointment-btn scrollto" id="login-btn">Login</a>';
            }
            ?>


            </div>
            </header>

            <!--Cover-->
            <section id="serviceCover" class="d-flex align-items-center">
                <div class="container">
                    <h2>Learn more about the services we provide and the charges corresponding to them</h2>
                </div>
            </section>

            <!--Services-->

            <section id="services" class="services">
                <div class="container-fluid">

                    <div class="row">
                        <div class= "col-xl-5 col-lg-6 serv-img-box d-flex justify-content-center align-items-stretch position-relative"></div>

                        <div class="col-xl-7 col-lg-6 serv-cat d-flex flex-column align-items-stretch py-5 px-lg-5">

                        <div class="row description" >
                            <h3 style="text-align:center;">Request for a service</h3>
                            <p style="font-size: 18px; text-align:center; font-family:'Poppins';">
                            Please select a category to learn more about the services we provide</p>
                        </div>

                        <div class = "row cat">
                        
                        <div class = "services-form">
                            <div class="services-title">
                            <h2>Select by category</h2>
                            </div>
                            <form action="./PHP/test_portal.inc.php" method="post">

                            <div class="col-lg form-group mt-2">
                            <select name="category" id="category" class="form-select">
                                <option value="">Select Category</option>
                                <option value="Ambulance">Ambulance</option>
                                <option value="Blood Bank">Blood Bank</option>
                                <option value="Colonoscopy">Colonoscopy</option>
                                <option value="Diagnostic">Diagnostic services</option>
                                <option value="ECG">ECG</option>
                                <option value="Echo">Echo</option>
                                <option value="Endoscopy">Endoscopy</option>
                                <option value="Fibroscan">Fibroscan</option>
                                <option value="Molecular Diagnostics">Molecular Diagnostics</option>
                                <option value="Opthalmology">Opthalmology</option>
                                <option value="Pathology">Pathology</option>
                                <option value="Radiology">Radiology</option>
                                <option value="Ultrasound">Ultrasound</option>
                            </select>
                            <div class = "servicedropdown">
                                <select name="serviceName" id="serviceName" class="form-select">
                                    <option value="">Select Service</option>
                                </select>
                            </div>
                            <div class="serviceDate">
                                <label for="date" name="date-label">Select your desired date</label>
                                <input type="date" class="form-control" autocomplete="off" id="test-date" name="test-date" placeholder="test Date">
                            </div>

                            <div class="test-btn">
                                <button type = "submit" id="test-form-submit" name="test-form-submit">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>                          
                    </div>
                </div>    
            </div>
            </section>

            <!--Table-->
            <div id = "servicesInfo">
                <div class = "row">
                    <div class="col-sm-12">

                    </div>
                </div>
            </div>
            <!-- Modals -->

                    <!-- Appointment success-->
                <div class="modal custom fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Success</h5>
                        </div>
                        <div class="modal-body">
                        Your request has been placed. Please wait for confirmation via email.
                        </div>
                        <div class="modal-footer">
                        <button type="button" id="closeModal"class="btn btn-secondary" data-dismiss="modal"
                        onclick="javascript:window.location.href='test_portal.php';">Close</button>
                        </div>
                    </div>
                    </div>
                </div>



                <!-- empty fields error-->
                <div class="modal custom fade" id="emptyfieldsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Error</h5>
                        </div>
                        <div class="modal-body">
                        Please fill out all the fields
                        </div>
                        <div class="modal-footer">
                        <button type="button" id="closeErrorModal"class="btn btn-secondary" data-dismiss="modal"
                        onclick="javascript:window.location.href='test_portal.php';">Close</button>
                        </div>
                    </div>
                    </div>
                </div>

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

    <script src = "assets/js/test_portal_script.js"></script>
    </body>
</html>