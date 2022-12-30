<?php
    session_start();
?>
<!DOCTYPE html>
<html lang ="en">
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
    <link rel="stylesheet" href="assets/styles/Patient_portal_styles.css">
    <link rel="stylesheet" href="./assets/styles/admin_font.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Med.io</title>
    </head>
    <body>

    <!--Header-->

    <header id="header" class="fixed-top">

        <div class="container d-flex align-items-center">
            
            <a href="patient_portal.php" class="logo me-auto"><img src="assets/images/med-io-img.png" alt="" class="img-fluid"></a>
            
        <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        
          <li><a class="nav-link scrollto active" href="patient_portal.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#intro">About</a></li>
          <li><a class="nav-link scrollto" href="test_portal.php">Services</a></li>
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
          <li><a class="nav-link scrollto" href="./covid-portal/covid-portal-index.html">Covid-19 Portal</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
          


          <li class="dropdown"><span>Departments</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#departments">Show All Departments</a></li>
              <li><a href="#tab-1">Medicine</a></li>
              <li><a href="#tab-2">Eye Care</a></li>
              <li><a href="#tab-3">Psychiatry</a></li>
              <li><a href="#tab-4">Cardiology</a></li>
              <li><a href="#tab-5">General Surgeon</a></li>
              <li><a href="#tab-6">Neurology</a></li>
              <li><a href="#tab-7">E.N.T</a></li>
              <li><a href="#tab-8">Orthopedics</a></li>
              <li><a href="#tab-9">Gynaecology
              </a></li>
              <li><a href="#tab-10">Skin and VD</a></li>
            </ul>
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

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
    <section id="cover" class="d-flex align-items-center">
      <div class="container">
        <h1>Welcome to Med.io - The Patient's Companion Website</h1>
        <a href="#intro" class="btn-get-started scrollto">Get Started</a>
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
            <h3>Get started</h3>
            <p>Visit a doctor with the help of this website easily with the press of a few buttons. Open your account first 
              to get an appointment today.
            </p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-appointment">
                <img src="assets/images/appointment_icon.png" alt="" >
              </i></div>
              <h4 class="title"><a href="#appointment">Make an appointment</a></h4>
              <p class="description">You can get an appointment through our website easily. Choose your desired department and 
                we will provide you with a doctor.
              </p>
              </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-department">
                <img src="assets/images/stethoscope_icon.png" alt="">
              </i>
              </div>
              <h4 class="title"><a href="#departments">Department infromation</a></h4>
              <p class="description">
                We have a range of doctors whom we have divided into various departments. Click the icon to learn mora about departments.
              </p>
              </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-services">
                <img src="assets/images/services_icon.png" alt="">
              </i></div>
              <h4 class="title"><a href="test_portal.php">Services</a></h4>
              <p class="description">
                We offer a range of medical services. Click the icon to learn more about our provided services.
              </p>
              </div>

          </div>
      </div>
    </div>
    </section>

    <!-- Appointment-->
    <section class="appointment" id="appointment">
      
        <div class="container">
          <div class="appointment-title">
            <h2 class="text-black">Make an appointment</h2>
          </div>

          <form action="./PHP/patient_portal.inc.php" method="post" id = "appointment-form" class="appointment-form">
            <div class="row">

              <div class="col-md-5 form-group mt-2">
                <label for="date" name="date-label">Select the appointment date</label>
                <input type="date" class="form-control" autocomplete="off" id="appointment-date" name="appointment-date" placeholder="Appointment Date">
                <div class="validate"></div>
              </div>


              <div class="col-md-5 form-group mt-2">
              <label for="department" name="dept-label">Choose your department</label>
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
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
              <div class="validate"></div>
              </div>

              <div class="col-md-5 form-group mt-2">
                <label for="doctorName" name= "doctor-label">Choose your desired doctor</label>
                <select name="doctorName" id="doctorName" class="form-select">
                  <option value="">Select Doctor</option>
                </select>
              </div>
            </div> 

            <div class="form-group mt-3">
              <textarea class="form-control message" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
            </div>

            <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="appointment-submit" id="appointment-form-submit" name="appointment-submit" >Make an Appointment</button></div>
          </form>


        </div>
    </section>

    <!-- Modals -->

    <!-- Appointment success-->
  <div class="modal custom fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Success</h5>
        </div>
        <div class="modal-body">
        Your appointment has been placed. Please wait for your email.
        </div>
        <div class="modal-footer">
          <button type="button" id="closeModal"class="btn btn-secondary" data-dismiss="modal"
          onclick="javascript:window.location.href='patient_portal.php';">Close</button>
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
          onclick="javascript:window.location.href='patient_portal.php';">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Department-->
    <section class="departments" id="departments">
      <div class="container">
        <div class="section-title">
          <h2>Departments</h2>
          <p>Our doctors are divided into a range of departments through which you can easily select the type of doctor you want 
            to get an appointment of.
          </p>
        </div>


        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Medicine</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Eye Care</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Psychiatry</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Cardiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">General Surgeon</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">E.N.T</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Orthopedics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Gynaecology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Skin and VD</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Medicine</h3>
                    <p class="fst-italic">Doctor of internal medicine</p>
                    <p>Physians practicing internal medicine. A broad-based medical field in which physicians rely 
                      on their knowledge of major organs to diagnose and treat patients. 
                      Internists treat a variety of afflictions, from colds and heart problems to infectious diseases.
                       Internists often serve as a patient's primary doctor, coordinating all that person's health care.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Eye Care</h3>
                    <p class="fst-italic">Specializing in eye vision and care.</p>
                    <p>A physician who specializes in the diagnosis and treatment of diseases of the eye. Ophthalmologists may prescribe and fit 
                      eyeglasses and contact lenses and also treat eye diseases with drugs and surgery. He/She will 
                      prescribe and fit glasses and contact lenses, as well as prescribe therapeutic exercises</p>
                  </div>
                  
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Psychiatry</h3>
                    <p class="fst-italic">Physians speciallizing on pyschology and human behaviour.</p>
                    <p>A psychiatrist is a medical doctor who specializes in mental health, including substance use disorders. Psychiatrists are qualified to assess both the mental and physical aspects of psychological problems.
People seek psychiatric help for many reasons. The problems can be sudden, such as a panic attack, frightening hallucinations, thoughts of suicide, or hearing "voices." Or they may be more long-term, such as feelings of sadness, hopelessness, or 
anxiousness that never seem to lift or problems functioning, 
causing everyday life to feel distorted or out of control.</p>
                  </div>
                  
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    <p class="fst-italic">An expert in heart and blood vessel diseases</p>
                    <p>A cardiologist is a healthcare provider who can treat chest pain, high blood pressure and heart failure, as well as problems with your heart valves, blood vessels and other heart and vascular issues. They can order tests like electrocardiograms, echocardiograms and CTs (computed tomography) to find out what’s wrong. With their diagnosis, they can order medicine, help you start healthier exercise and eating habits or do cardiac catheterization.</p>
                  </div>
                  
                </div>
              </div>

              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>General Surgeon</h3>
                    <p class="fst-italic">Specializing in surgical procedures</p>
                    <p>A general surgeon has specialized knowledge of the entire surgical process, from the initial evaluation through preparation, procedure, and post-operative management.
                    General surgeons have a broad knowledge of many different diseases and conditions. They will recommend whether you need surgery and what kind of surgery would be appropriate.
                    </p>
                  </div>
                  
                </div>
              </div>


              <div class="tab-pane" id="tab-6">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Neurology</h3>
                    <p class="fst-italic">Manage and treat neurological conditions, or problems with the nervous system</p>
                    <p>A neurologist is a medical doctor who specializes in treating diseases of the nervous system. The nervous system is made of two parts: the central and peripheral nervous system. It includes the brain and spinal cord.
Illnesses, disorders, and injuries that involve the nervous system often require a neurologist’s management and treatment.
                    </p>
                  </div>
                  
                </div>
              </div>


              <div class="tab-pane" id="tab-7">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>E.N.T</h3>
                    <p class="fst-italic">A physician specializing in medical conditions of the ear, nose, throat, and neck </p>
                    <p>Hearing and balance, swallowing and speech, breathing and sleep issues, allergies and sinuses, head and neck cancer, 
                      skin disorders, even facial plastic surgery are just some of the conditions that “ENT” (ear, nose, and throat) specialists treat.
                      ENT specialists are not only medical doctors who can treat your sinus headache, your child’s swimmer’s ear, or your dad’s sleep apnea. They are also surgeons who can perform extremely 
                      delicate operations to restore hearing of the middle ear, open blocked airways, remove head, neck, and throat cancers, and rebuild these essential structures.
                    </p>
                  </div>
                  
                </div>
              </div>


              <div class="tab-pane" id="tab-8">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Orthopedics</h3>
                    <p class="fst-italic">Specializing in diseases affecting your musculoskeletal system.</p>
                    <p>An orthopedist (also spelled orthopaedist) is a medical specialty focusing on injuries and diseases affecting your
                       musculoskeletal system (bones, muscles, joints and soft tissues). 
                      Although this type of doctor is a surgeon, they often help people get relief with nonsurgical therapies.
                      Orthopedics focuses on issues due to injury, congenital defects and wear and tear (degenerative disease).
                    </p>
                  </div>
                  
                </div>
              </div>


              <div class="tab-pane" id="tab-9">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Gynaecology</h3>
                    <p class="fst-italic">Specializing in female reproductive health</p>
                    <p>Gynecologists give reproductive health services that include pelvic exams, 
                      Pap tests, cancer screenings, and testing and treatment for vaginal infections.
                      They diagnose and treat reproductive system disorders such as endometriosis, infertility, ovarian cysts,
                      and pelvic pain. They may also care for people with ovarian, cervical, and other reproductive cancers.
                      </p>
                  </div>
                  
                </div>
              </div>


              <div class="tab-pane" id="tab-10">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Skin and VD</h3>
                    <p class="fst-italic">Specialist in dermatology and venereology</p>
                    <p>The dermatologist is an expert in skin diseases and sexually transmitted diseases. 
                      Eczema, acne, psoriasis, vitiligo and allergies are the most common indications for dermatological treatment. 
                      The most frequent types of therapy for skin diseases include operative removals of benign and malignant skin changes - malignant melanoma (skin cancer).
Dermatologists possess expertise in diagnostic procedures as well as disease-related pre- and post-diagnostic treatments.
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

   

    </main>

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

    <script src="assets/js/patient_portal_script.js"></script>
    </body>
</html>

<!---
Appointment Icon by <a href="https://freeicons.io/profile/3335">MD Badsha Meah</a> on <a href="https://freeicons.io">freeicons.io</a>                         
Stethoscope Icon by <a href="https://freeicons.io/profile/5790">106171237606937156455</a> on <a href="https://freeicons.io">freeicons.io</a>
Services Icon by <a href="https://freeicons.io/profile/2257">uicon</a> on <a href="https://freeicons.io">freeicons.io</a>
  
Introduction Photo by Pixabay: https://www.pexels.com/photo/close-up-photo-of-a-stethoscope-40568/
    
-->