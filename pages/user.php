<div id="friends">
    <?php 
        
        $image = "";
        if($FRIEND_ROW['gender'] == "Male"){
            $image = "../assets/img/user_male.jpg";
        }else{
            $image = "../assets/img/user_female.jpg";
        }
    
    ?>
    <img id="friends-img" src="<?php echo $image ?>">
    <br>
    <?php echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name'] ?>
</div>