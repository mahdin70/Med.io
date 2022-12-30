<?php
  session_start();
  session_destroy();

  $_SESSION['message'] = "Logged Out Successfully";
  header("Location: ../admin_login.php");
  exit();
?>