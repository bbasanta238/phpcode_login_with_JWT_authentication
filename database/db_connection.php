<?php

function OpenCon()
 {
 $dbhost = "127.0.0.1";
 $dbuser = "root";
 $dbpass = "dbms123";
 $db = "php";

 echo "Connected Successfully";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db,"3306") or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>