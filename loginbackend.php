<?php

// Database Connection
include './auth.php';
include './database/db_connection.php';
$conn = OpenCon();

$email = $_POST['Email'];
$password= $_POST["Password"];

$userquery = "SELECT * FROM login WHERE (username LIKE '$email'|| email LIKE '$email')";
if(isloggedin() == true){
    echo "you are already logged in";
}elseif(mysqli_num_rows(mysqli_query($conn,$userquery))>0){
    $result = mysqli_query($conn,$userquery);//returns object so to use result should be converted to arry or use of loop to access in object
    $row = mysqli_fetch_array($result);//converting object into arrays
    // echo $row[1];
    if($password == $row[3]){
        echo "You sucessfully get logged in";
        auth($row);
    }else{
        // echo $row[0];
        header("Location:./login.php?login=error");
    }

    
}else{
    // echo $row;
    header("Location:./login.php?login=error");  
};
?>