<?php 

    session_start();
    if(isset($_SESSION['galaxite_userid'])){
        $_SESSION['galaxite_userid'] = NULL;
        unset($_SESSION['galaxite_userid']);
    }
    header("Location: ../index.php");
    die;



?>