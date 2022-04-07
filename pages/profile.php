<?php

    session_start();


    //INCLUDE OR LIBRARYS
    include("../classes/connect.php");
    include("../classes/login.php");
    include("../classes/user.php");
    include("../classes/post.php");


    $login = new Login();
    $user_data = $login -> check_login($_SESSION['galaxite_userid']);
    
    // print_r($user_data); //Show user data as an array

    // For Posting (Starts right here)
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $post = new Post();
        $id = $_SESSION['galaxite_userid'];
        $result = $post -> create_post($id, $_POST);
        // print_r($_POST); //Prints the text of the post

        if($result == ""){
            header("Location: profile.php");
            die;
        }else{
            echo "<div style='text-align:center; font-size:12px; color:red;'>";
            echo "The following errors occured:<br><br>";
            echo $result;
            echo "</div>";
        }
    }

    //Collecting data from the database (Posts)
    $post = new Post();
    $id = $_SESSION['galaxite_userid'];
    $posts = $post -> get_posts($id);

    //Collecting data from the database (Friends)
    $user = new User();
    $id = $_SESSION['galaxite_userid'];
    $friends = $user -> get_friends($id);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxite-profile</title>
    <link rel="stylesheet" href="../assets/css/style-profile.css">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
</head>
<body style="background-color: rgba(250, 250, 250, 0.815);">
    <!-- Top Bar -->
    <?php include("header.php"); ?>
    <!--Cover Area-->

    <div style="width: 800px; margin: auto;  min-height: 400px;">
        <div style="background-color: rgba(250, 250, 250, 0.815); text-align: center;">
            <img src="../assets/img/cover-img-test.jpg" style="width: 100%; border-radius: 10px;">
            
            <a href="change_profile_image.php">
                <img src="../assets/img/selfie-test.jpg" class="profile-img">
            </a>
            
            <br>
                <div style="font-size: 20px;"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></div>
            <br>
            <a id="menu-btn" href="timeline.php">Timeline</a>
            <div id="menu-btn">About</div>
            <div id="menu-btn">Friends</div>
            <div id="menu-btn">Photos</div> 
            <div id="menu-btn">Settings</div>
        </div>

        <!--Below Cover Area-->
        <div style="display: flex;">

            <!--friends area-->
            <div style="min-height: 400px;flex: 1;">
                <div id="friend-bar">

                    Friends<br>

                    <?php 
                        if($friends){
                            foreach($friends as $FRIEND_ROW){
                                #code ...

                                include("user.php");
                            }
                        }
                    
                    
                    ?>  


                </div>
            </div>

            <!--posts area-->
            <div style="min-height: 400px;flex: 2.5;padding: 20px;padding-right: 0px;">
                <div style="padding:10px; background-color: rgba(250, 250, 250, 0.815);">

                    <form method="post">
                        <textarea name="post" placeholder="What's on your mind?"></textarea>
                        <input id="post_btn" type="submit" value="Post">
                        <br>
                    </form>

                </div>

                <!-- Posts -->
                <div id="posts_bar">

                    <?php 
                        if($posts){
                            foreach($posts as $ROW){
                                #code ...

                                $user = new User();
                                $ROW_USER = $user -> get_data($ROW['userid']);
                                include("post.php");
                            }
                        }
                    
                    
                    ?>                    
                    

                </div>

            </div>
        </div>
    </div>
</body>
</html>