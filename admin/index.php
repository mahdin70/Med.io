<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <title>Admin Dashboard</title>

    <link rel="stylesheet" type="text/css" href="../assets/styles/admin_font.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="../assets/images/med-io-img.png">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">



</head>

<body style="background-color:white;">
    <?php
    include("../SQL/dbConnect.php");
    ?>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <img src="../assets/images/admin_logo.png" height="40px" width="40px" style="padding:2px;" />
        <h5 class="text-white">Admin Dashboard</h5>
        <div class="mr-auto"></div>

        <ul class="navbar-nav">
            <?php
            if (isset($_SESSION['adminUser'])) {
                $user = $_SESSION['adminUser'];
                echo '
                    <li class="nav-item" style="background-color:  #98FB98; border-radius: 5px; margin-right: 10px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                       <a href="#" class="nav-link" style="color: #000000;">' . $user . '</a>
                    </li>
                    <li class="nav-item" style="background-color: #b92e34; border-radius: 5px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                       <a href="/Med.io/admin/admin_logout.php" class="nav-link text-white">Logout</a>
                    </li>
                ';
            }
            ?>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-30px" ;>

                    <!--Side Navigation-->
                    <?php
                    include("./sidenav.php")
                    ?>
                </div>
                <div class="col-md-10 ">


                    <!--Dashboard and Cardview-->

                    <div class="col-md-12 my-5">
                        <div class="row">

                            <!--Total Admin-->

                            <div class="col-md-3 bg-info mx-2" style="height:130px; border-radius:10px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">

                                            <?php
                                            $ad = mysqli_query($conn, "SELECT * FROM admin");
                                            $num = mysqli_num_rows($ad);
                                            ?>

                                            <h5 class="my-2 text-white" style="font-size:30px;"><?php echo $num; ?></h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Admins</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="../admin/admin.php"><i class="fa fa-solid fa-user-shield fa-3x my-4" style="color:azure;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Total Doctor-->

                            <div class="col-md-3 bg-info mx-2" style="height:130px; border-radius:10px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <?php
                                            $p = mysqli_query($conn, "SELECT * FROM doctor WHERE Approved = 1");
                                            $pp = mysqli_num_rows($p);
                                            ?>
                                            <h5 class="my-2 text-white" style="font-size:30px;"><?php echo $pp; ?></h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Doctors</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="../admin/listeddoctor.php"><i class="fa fa-solid fa-user-doctor fa-3x my-4" style="color:azure;"></i></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Total Patient-->
                            <div class="col-md-3 bg-info mx-2" style="height:130px; border-radius:10px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <?php
                                            $p = mysqli_query($conn, "SELECT * FROM patient");
                                            $pp = mysqli_num_rows($p);
                                            ?>
                                            <h5 class="my-2 text-white" style="font-size:30px;"><?php echo $pp; ?></h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Patients</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="../admin/patient.php"><i class="fa fa-solid fa-hospital-user fa-3x my-4" style="color:azure;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Total Report-->

                            <div class="col-md-3 bg-danger mx-2 my-3" style="height:130px; border-radius:10px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <?php
                                            $p = mysqli_query($conn, "SELECT * FROM servicesrequest WHERE Status = 0");
                                            $pp = mysqli_num_rows($p);
                                            ?>
                                            <h5 class="my-2 text-white" style="font-size:30px;"><?php echo $pp; ?></h5>
                                            <h5 class="text-white">Pending</h5>
                                            <h5 class="text-white">Test Reports</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="../admin/pendingrep.php"><i class="fa fa-solid fa-file-contract fa-3x my-4" style="color:azure;"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--Total Job Request-->

                            <div class="col-md-3 bg-warning mx-2 my-3" style="height:130px; border-radius:10px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <?php
                                            $p = mysqli_query($conn, "SELECT * FROM doctor WHERE Approved = 0");
                                            $pp = mysqli_num_rows($p);
                                            ?>
                                            <h5 class="my-2 text-white" style="font-size:30px;"><?php echo $pp; ?></h5>
                                            <h5 class="text-black">Doctor</h5>
                                            <h5 class="text-black">Requests</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="../admin/pendingdoctor.php"><i class="fa fa-solid fa-people-group fa-3x my-4" style="color:azure;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Total Appointment-->

                            <div class="col-md-3 bg-success mx-2 my-3" style="height:130px; border-radius:10px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <?php
                                            $p = mysqli_query($conn, "SELECT * FROM requests");
                                            $pp = mysqli_num_rows($p);
                                            ?>
                                            <h5 class="my-2 text-black" style="font-size:30px;"><?php echo $pp; ?></h5>
                                            <h5 class="text-black">Total</h5>
                                            <h5 class="text-black">Appointments</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="../admin/appointment.php"><i class="fa fa-solid fa-person-circle-plus fa-3x my-4" style="color:azure;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>