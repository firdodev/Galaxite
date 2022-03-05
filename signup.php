<?php
    //INCLUDE OR LIBRARYS
    include("classes/connect.php");
    include("classes/signup.php");


    $first_name = "";
    $last_name = "";
    $gender = "";
    $email = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $signup = new Signup();
        $result = $signup -> evaluate($_POST);

        if($result != ""){

            echo "<div style='text-align:center; font-size:12px; color:red;'>";
            echo "The following errors occured:<br><br>";
            echo $result;
            echo "</div>";
        }else{

            header("Location: login.php");
            die;
        }
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
    }
?>



<!-- html part -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-login-create.css">
    <title>Galaxite</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
</head>
<body>
        <!-- Stars -->
        <!-- <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div> -->
        
        <!-- <div class="video-bg">
            <video autoplay loop muted id="video-bg-f">
                <source src="assets/video/videobg.mp4" type="video/mp4">
            </video>
        </div> -->
        <div class="login-container" >
            <div id="title" style="top: 20%;">
                <div class="logo-full">
                    <img src="assets/img/logo.png" alt="logo-galaxite" class="logo">
                    <span class="alaxite-logo-name">alaxite</span>
                </div>
                <br>
                <span>Signup</span>
            </div>
            <center>
                <form method="post" action="">
                    <input value = "<?php echo $first_name ?>" type="text" placeholder="First Name" class="email" name="first_name" id="first-name" required>
                    <input value = "<?php echo $last_name ?>" type="text" placeholder="Last Name" class="email" name="last_name" id="last-name" required>
                    <p>Gender:</p>
                    <select class="gender-select" name="gender" required>
                        <option><?php echo $gender ?></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <input value = "<?php echo $email ?>" type="email" placeholder="Email" class="email" name="email" id="email" required>
                    <input type="password" placeholder="Password" class="password" name="password" id="password" required>
                    <input type="password" placeholder="Re-Password" class="password" name="re-password" id="re-password" required>
                    <p style="color: red;" id="error-msg"></p>
                    <input type="submit" class="login" value="Create Account">
                    <!-- <button class="login" type="button">Create Account</button> -->
                </form>
                <a href="login.php" style="text-decoration: none;"><button class="create-acc">Login Account</button></a>
            </center>
        </div>
</body>
</html>