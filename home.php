<?php
    include './auth.php';

    if(isloggedin()){
        echo "entered";
        header("Location:./authorized.php");
    }else{
        // echo isloggedin();
        header("Location:./1.php");
    }
?>