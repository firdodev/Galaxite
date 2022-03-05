<?php
    session_start();
    //INCLUDE OR LIBRARYS
    include("classes/connect.php");
    include("classes/login.php");

    $email = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $login = new Login();
        $result = $login -> evaluate($_POST);

        if($result != ""){

            echo "<div style='text-align:center; font-size:12px; color:red;'>";
            echo "The following errors occured:<br><br>";
            echo $result;
            echo "</div>";
        }else{

            header("Location: pages/profile.php");
            die;
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-login-create.css">
    <title>Galaxite</title>
    <!-- <script src="assets/js/login.js"></script> -->
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
</head>
<body>
        
        <!-- <div class="video-bg">
            <video autoplay loop muted id="video-bg-f">
                <source src="assets/video/videobg.mp4" type="video/mp4">
            </video>
        </div> -->
        <div class="login-container">
            <div id="title">
                <div class="logo-full">
                    <img src="assets/img/logo.png" alt="logo-galaxite" class="logo">
                    <span class="alaxite-logo-name">alaxite</span>
                </div>
                <br>
                <span>Login</span>
            </div>
            <center>
                <form method="post" name="Form">
                    <input value="<?php echo $email; ?>" type="email" placeholder="Email" class="email" name="email" id="email">
                    <input value="<?php echo $password; ?>" type="password" placeholder="Password" class="password" name="password" id="password">
                    <!-- <p style="color: red;" id="error-msg"></p> -->
                    <!-- <button class="login" type="button" onclick="checklogin()">Login</button> -->
                    <input type="submit" class="login" value = "Log in">
                </form>
                <a href="signup.php" style="text-decoration: none;"><button class="create-acc" id="create-acc" type="submit">Create Account</button></a>
            </center>
        </div>
</body>
</html>