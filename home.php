<?php
    include './auth.php';
    $check = isloggedin();
    if($check->id != NULL){
        // echo "entered";
        header("Location:./authorized.php?id=".$check->id);
    }else{

        header("Location:./1.php");
    }
?>