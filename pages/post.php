<!-- Post 2 -->
<div id="posts">
    <div>
        <?php 
        
            $image = "";
            if($ROW_USER['gender'] == "Male"){
                $image = "../assets/img/user_male.jpg";
            }else{
                $image = "../assets/img/user_female.jpg";
            }
        
        ?>
        <img src="<?php echo $image ?>" style="width: 40px; height: 40px; border-radius: 50px; margin-right: 4px;">
    </div>
    <div>
        <div style="font-weight: bold; color: rgb(54, 54, 54); padding: 7px;"><?php echo $ROW_USER['first_name'] . " " . $ROW_USER["last_name"] ?></div>
        <?php echo $ROW['post'] ?>
        <br/><br/>
        <a href="">Like</a> . <a href="">Comment</a> . 
        <span style="color: #999;">
            <?php echo $ROW['date'] ?>
        </span>
    </div>
</div>