<?php
include "dataBase/Db.php";
include "header.php";
session_start();
if(!isset($_SESSION['email'])){
  echo "<script>alert(Session expired please try again)</script>";
  header('location:forgotPassword.php');
}
else{
  $now= time();
  if ($now > $_SESSION['expire']){
    session_destroy();
    echo "Your session has expired! <a href='forgotPassword.php'>Forgot password</a>";
}
}

$msg = "";
if (isset($_POST['submit'])){
    //echo "hello";
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    // echo "<pre>";
    // print_r($fetch);die;
    // echo "</pre>";
    $email = $_SESSION['email'];
    if($password !==$cpassword){
      $msg =  "password should  be matched";
    }else{
  
    //echo $email;
    // echo $email;die;
    //$password = $_POST['password'];
    //$cpassword = $_POST['confirmpassword'];
    $slquery = "SELECT * FROM crud WHERE email = '$email'";
    //echo $slquery;die;
    $selectresult = mysqli_query($connection,$slquery);
    
        
         if($selectresult){
            $query = "update crud set password='$password' where email='$email'";
            //cho $query;die;
            $result = mysqli_query($connection,$query);
            if($result){
               $msg = "<script>alert('Password changed successfully')</script>";
               session_unset();
               session_destroy();
            }
         }
    
  }
   }

?>

<div class="container pt-5 col-lg-6">
<form id="register-form" role="form" autocomplete="on" class="form" method="post">   
    <h3 class="text-center text-warning bg-light">Please Enter Confirm password</h3> 
  <div class="form-group">
	<div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
	  <input type="password" id="email" class="form-control" name="password" placeholder="enter new password"  >
	</div>
    
  </div>
  <div class="form-group">
  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
	  <input type="password" id="email" class="form-control" name="cpassword" placeholder="enter confirm password"  >
	</div>
    </div>
  <div class="form-group">
	<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" >
  </div><span class="text-danger"><?php echo $msg;?></span>
  
  <input type="hidden" class="hide" name="token" id="token" value=""> 
</form>
</div>