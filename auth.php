<?php
//jwt
// include vendor
require './vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
$key = 'example_key';

function auth($row){
    // echo "called auth";
    $iss = "loacalhost";//issuer at
    $iat = time();//issuer at
    $nbf = $iat + 10;//not before means simply give the token after 10sec of iat
    $exp = $iat + 60*60;//expires at 60sec after iat
    $aud = "myusers"; //audience
    $user_data = array(
        "id"=>$row[0]  ,
        "email"=>$row[1],
        "name" =>$row[2],
    );
    $secret_key = "php071jwt";
    $payload= array(
        "iss"=> $iss,
        "iat"=> $iat,
        "nbf"=> $nbf,
        "exp"=> $exp,
        "aud"=> $aud,
        "data"=> $user_data
    );
    $jwt=JWT::encode($payload,$secret_key,'HS256');
    setcookie('webphp',$jwt);
    // echo $jwt;
}

function isloggedin(){
    $secret_key = "php071jwt";
    // $jwt= [$_COOKIE['webphp']];
    // print_r($jwt);
    if(isset($_COOKIE['webphp'])){
        try{
            $decode = JWT::decode([$_COOKIE['webphp']][0],new key($secret_key ,'HS256'));
           
            // echo $decode->{'id'};
            print_r(($decode->data));
            return $decode->data;
            // echo array($decode)[0];
            // return true;
        }catch(Exception $ex){
            echo $ex;
            // echo 'Invalid token';
        }
    }else{
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        header(`Location: $url`);
    }
}


?>