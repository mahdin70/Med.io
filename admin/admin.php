<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Admins</title>

    <link rel="stylesheet" type="text/css" href="../assets/styles/admin_font.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="../assets/images/med-io-img.png">

    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
            <img src="../assets/images/admin_logo.png" height="40px" width="40px" style="padding:2px" />
            <h5 class="text-white">Admin List</h5>
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
                        include("./sidenav.php");
                        include("../SQL/dbConnect.php")

                        ?>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6" style="width:50%; margin: auto;">
                                    <h5 class="text-center" style="font-family:Poppins;margin-top:25px;">All Admins</h5>

                                    <?php
                                    $ad = $_SESSION['admin'];
                                    $query = "SELECT * FROM admin WHERE User !='$ad'";
                                    $res = mysqli_query($conn, $query);
                                    $output =
                                        '<table class="table table-hover table-dark table-bordered" style="margin: auto; width: 50%;">
                                     <th style="text-align: center;">Username</th>
                                     <tr>
                                     ';

                                    if (mysqli_num_rows($res) < 1) {
                                        $output = "<h5 class='text-center' style='font-family:Poppins;'>No New Admin</h5>";
                                    }

                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $user = $row['User'];
                                        $output .= "
                                        <tr>
                                            <td style='text-align: center;'>$user</td>";
                                    }
                                    $output .= "
                                        </tr>
                                     </table>";

                                    echo $output;
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>