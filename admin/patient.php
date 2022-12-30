<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Patients</title>
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

<body>

    <body style="background-color:white;">
        <?php
        include("../SQL/dbConnect.php")
        ?>
        <nav class="navbar navbar-expand-lg navbar-info bg-info">
            <img src="../assets/images/patient_logo.png" height="40px" width="40px" style="padding:2px;" />
            <h5 class="text-white">Manage Patient</h5>
            <div class="mr-auto"></div>

            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION['adminUser'])) {
                    $user = $_SESSION['adminUser'];
                    echo '
                    <li class="nav-item" style="background-color: #98FB98; border-radius: 5px; margin-right: 10px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
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
                        include("./sidenav.php");
                        include("../SQL/dbConnect.php")
                        ?>
                    </div>

                    <div class="col-md-10">
                        <div style="display: inline-block; padding: 10px; background-color: #00FFFF; border: 2px solid #000000; border-radius: 8px; color: #000000; font-family: Poppins; font-size:20px; font-weight:500; margin-top: 25px; text-align: center; line-height: 1.5; margin-bottom: 20px;">
                            Patient List
                        </div>
                        <?php
                        $query = "SELECT * FROM patient";
                        $res = mysqli_query($conn, $query);

                        $output = "";
                        $output .= "

                        <table class='table table-striped table-dark table-bordered'>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Medical History</th>
                            <th>Vaccination Status</th>
                            </tr>
                        ";

                        if (mysqli_num_rows($res) < 1) {
                            $output .= "
                            <tr>
                            <td class='text-center' colspan='7'>No Patient Yet</td>
                            </tr>
                            ";
                        }
                        while ($row = mysqli_fetch_array($res)) {
                            $output .= "
                                <tr>
                                <td>" . $row['ID'] . "</td>
                                <td>" . $row['Name'] . "</td>
                                <td>" . $row['Email'] . "</td>
                                <td>" . $row['Gender'] . "</td>
                                <td>" . $row['Age'] . "</td>
                                <td>" . $row['Previous_Medical_History'] . "</td>   
                                <td>" . $row['Vaccination_status'] . "</td>
                                </tr>
                                ";
                        }

                        $output .= "
                            </tr>
                            </table>
                            ";
                        echo $output;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>