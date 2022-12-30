<?php
    session_start();
?>
<?php
$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);

// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$_SESSION['Email']=$params['key'];
$_SESSION['reset_token'] = $params['reset_token'];
?>
<!Doctype html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="icon" href="./assets/images/med-io-img.png">
    <link rel="stylesheet" href="../assets/styles/login_styles.css">
    <link rel="stylesheet" href="../assets/styles/admin_font.css">
    <head>
        <title>Update Password</title>
    </head>
    <body>

    <div class = "container-fluid">
        <div class = "center">
            <div class = "heading">
                <h3>Update Password</h3>
            </div>


            <div class = "form-content">
            <form class= "Update" action="DoctorupdatePassword.php" method='POST'>
                <div class = "placeholders">
                    <input type="password" id = "password" name="password" placeholder="password"><br><br>
                </div>
                
                <button type='submit' name='Doctor_update_Password'>Update</button>
                
            </form>
            </div>

        </div>
    </div>

    
    </body>
</html>