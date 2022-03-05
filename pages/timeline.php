<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxite-timeline</title>
    <link rel="stylesheet" href="../assets/css/style-timeline.css">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
</head>
<!-- ==== Body ==== -->
<body style="background-color: rgba(250, 250, 250, 0.815);">
    <!--Top Bar-->
    
    <div class="nav-top-bar">
        <div style="width: 800px; margin: auto; font-size: 30px;">
            <a href="timeline.php" style="text-decoration: none;">
                <img src="../assets/img/logo.png" style="width: 50px; height: 50px;">
            </a>
            alaxite
            <input type="text" class="search-box" placeholder="Search people">
            <a href="profile.php" class="profile-logo">
                <img src="../assets/img/selfie-test.jpg" style="width: 50px; float: right; border-radius: 50px;">
            </a>
            
        </div>
    </div>

    <!--Cover Area-->

    <div style="width: 800px; margin: auto;  min-height: 400px;">
        <!--Below Cover Area-->
        <div style="display: flex;">

            <!--friends area-->
            <div style="min-height: 400px;flex: 1;">
                <div id="friend-bar">
                    
                    <img src="../assets/img/selfie-test.jpg" class="profile-img"><br>
                    Lucy Parker

                </div>
            </div>

            <!--posts area-->
            <div style="min-height: 400px;flex: 2.5;padding: 20px;padding-right: 0px;">
                <div style="padding:10px; background-color: rgba(250, 250, 250, 0.815);">

                    <textarea placeholder="What's on your mind?"></textarea>
                    <input id="post_btn" type="submit" value="Post">
                    <br>

                </div>

                <!-- Posts -->
                <div id="posts_bar">

                    <!-- Post 1 -->
                    <div id="posts">
                        <div>
                            <img src="../assets/img/user1-test.jpg" style="width: 40px; height: 40px; border-radius: 50px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: rgb(54, 54, 54); padding: 7px;">First Guy</div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">December 25 2022</span>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div id="posts">
                        <div>
                            <img src="../assets/img/user2-test.jpg" style="width: 40px; height: 40px; border-radius: 50px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: rgb(54, 54, 54); padding: 7px;">Second Girl</div>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).                            
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">December 16 2022</span>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div id="posts">
                        <div>
                            <img src="../assets/img/user3-test.jpg" style="width: 40px; height: 40px; border-radius: 50px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: rgb(54, 54, 54); padding: 7px;">Third Guy</div>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.                            
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">December 12 2022</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>
</html>