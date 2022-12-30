<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/med-io-img.png">
    <title></title>
</head>

<body>

    <div class="list-group" style="height:95vh ; width: 185px">
        <a href="index.php" class="list-group-item list-group-item-action text-white" style="background-color :#17a2b8; border-radius: 5px; margin-top:10px; margin-bottom: 5px; margin-left: 5px; margin-right: 5px;box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">Dashboard</a>
        <a href="admin.php" class="list-group-item list-group-item-action text-white" style="background-color :#17a2b8; border-radius: 5px; margin: 5px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">Administrators</a>
        <a href="listeddoctor.php" class="list-group-item list-group-item-action text-white" style="background-color :#17a2b8; border-radius: 5px; margin: 5px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">Listed Doctors</a>
        <a href="pendingdoctor.php" class="list-group-item list-group-item-action text-white" style="background-color :#17a2b8; border-radius: 5px; margin: 5px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">Doctor Requests</a>
        <a href="patient.php" class="list-group-item list-group-item-action text-white" style="background-color :#17a2b8; border-radius: 5px; margin: 5px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">Patients</a>
        <a href="appointment.php" class="list-group-item list-group-item-action text-white" style="background-color :#17a2b8; border-radius: 5px; margin: 5px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">Appointments</a>
        <a href="pendingrep.php" class="list-group-item list-group-item-action text-white" style="background-color :#17a2b8; border-radius: 5px; margin: 5px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">Pending Reports</a>
        <a href="deliverrep.php" class="list-group-item list-group-item-action text-white" style="background-color :#17a2b8; border-radius: 5px; margin: 5px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">Delivered Reports</a>
    </div>

    <style>
        .list-group-item-action.active {
            background-color: #2c4964;
            color: #000;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var url = window.location.href;
            url = url.substring(url.lastIndexOf("/") + 1);
            $(".list-group a[href='" + url + "']").addClass("active");
        });
    </script>

</body>

</html>