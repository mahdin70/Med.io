<?php

if(isset($_POST['category'])){
    require '../SQL/dbConnect.php';
    $category = $_POST['category'];

    $sql = "SELECT * FROM services WHERE category=?";
    $statement = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($statement, $sql)){
        header('Location: ../test_portal.php?error=sqlerror');
        exit();
    }

    else{
        mysqli_stmt_bind_param($statement, "s", $category);
        mysqli_stmt_execute($statement);
        
        $result_check = mysqli_stmt_get_result($statement);
        
        while($row = mysqli_fetch_array($result_check)) {
            $name = $row['Name'];
            echo"<option value='".$name."'>".$name."</option>";
        }
        mysqli_close($conn);
    }

}

?>