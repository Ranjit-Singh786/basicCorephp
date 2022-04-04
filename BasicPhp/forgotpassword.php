<?php
//include "../dataBase/Db.php";
include("dataBase/Db.php");
include "header.php";
session_start();
//require('vendor/autoload.php');
//global $connection;
$err = "";
//print_r($_SERVER["REQUEST_TIME"]);die;
if(isset($_POST['submit']) & !empty($_POST['submit'])){
  //echo "hello";die;
$email = mysqli_real_escape_string($connection, $_POST['email']);
//echo $email;die;
$sql = "SELECT * FROM `crud` WHERE email = '$email'";
$res = mysqli_query($connection, $sql);
$count = mysqli_num_rows($res);
if($count>0){
   while($row = $res->fetch_assoc()){
     if($email == $row['email'] ){
       $_SESSION['email'] = $row['email'];
       //print_r($_SESSION['email']);die;
       $_SESSION['start'] = time();
       $_SESSION['expire'] = $_SESSION['start'] +60;
       //print_r($_SESSION['expire']);die;

 

// $r = mysqli_fetch_assoc($res);
//$id = $r['id'];
//echo $id;die;
$otp = rand(100000,999999);
$sql_insert = "UPDATE `crud` SET token ='$otp' where email='$email'";
//echo $sql_insert;die;
$result = mysqli_query($connection,$sql_insert);

  //echo "hello this is good";
  if($result){
    $ch = curl_init();

$url =  'http://192.168.10.40/mail.php?email='."$email".'&otp='."$otp";
//print_r($url);die;

if(isset($url)){

 // $_SESSION['time'] = time();
  //print_r($_SESSION['time']);die;
$ch = curl_init();
 
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 

$output=curl_exec($ch);
header("location:otpVerfication.php");
curl_close($ch);
//print_r($output);die;
return $output;
     
 } 

  }else{
    echo "token unsuccessfull";
   } 

  
}else{
   $err1= "";
}
}
}else{
  $err =  "email address not exist in database";
}




}
?>

<div class="container pt-5 col-lg-6">
    <form id="register-form" role="form" autocomplete="on" class="form" method="post">
        <h3 class="text-center text-warning bg-light">Please Enter Email Address</h3>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                <input type="email" id="email" class="form-control" name="email" placeholder="email address">
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password">
        </div><span class="text-danger"><?php echo $err;?></span>

        <input type="hidden" class="hide" name="token" id="token" value="">
    </form>
</div>

<?php

include "footer.php";
?>