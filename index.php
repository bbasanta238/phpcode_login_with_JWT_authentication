<?php

// Database Connection
include './database/db_connection.php';
$conn = OpenCon();

$email = $_POST['Email'];
$username =$_POST['Username'];
$password= $_POST["Password"];
$confirmPassword= $_POST["confirmPassword"];
if($password == $confirmPassword){
    $userquery = "SELECT username FROM login WHERE username LIKE '$username'";
    echo "here";
    if(mysqli_num_rows(mysqli_query($conn,$userquery))==0){
        echo "hetherere";
        $sql = "INSERT INTO login(email,username,password) VALUES('$email','$username','$password')";
        if(mysqli_query($conn,$sql)){
            header("Location:./1.php?registration=sucessfull");
            // header("Location:./view/1.php?registration=errorpassword"); 
        }else{
            echo $conn->error;
        }
        
    }else{
        // echo "username already taken";
        header("Location:./1.php?registration=sameusername");
    }
    
}else{
    header("Location:./1.php?registration=errorpassword");  
}

// CloseCon($conn);
?>