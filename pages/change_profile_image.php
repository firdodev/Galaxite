<?php 
    session_start();


    //INCLUDE OR LIBRARYS
    include("../classes/connect.php");
    include("../classes/login.php");
    include("../classes/user.php");
    include("../classes/post.php");


    $login = new Login();
    $user_data = $login -> check_login($_SESSION['galaxite_userid']);


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxite-Change Profile Image</title>
    <link rel="stylesheet" href="../assets/css/style-timeline.css">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
</head>
<!-- ==== Body ==== -->
<body style="background-color: rgba(250, 250, 250, 0.815);">
    <!--Top Bar-->
    
    <?php include("header.php"); ?>


    <!--Cover Area-->

    <div style="width: 800px; margin: auto;  min-height: 400px;">
        <!--Below Cover Area-->
        <div style="display: flex;">

            <!--posts area-->
            <div style="min-height: 400px;flex: 2.5;padding: 20px;padding-right: 0px;">
               
                <form method="post" enctype="multipart/form-data">
                    <div style="padding:10px; background-color: rgba(250, 250, 250, 0.815);">

                        <input type="file" name="file" >
                        <input id="post_btn" type="submit" value="Post">
                        <br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>