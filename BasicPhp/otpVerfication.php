<?php 
include "header.php";
include("dataBase/Db.php");
session_start();
//session_destroy();
$err = "";
if(isset($_POST['submit'])){
    $token = $_POST['token'];
    $email = $_SESSION['email'];
    //print_r($_SESSION);die;
    $selectsql = "select * from crud where email ='$email' && token ='$token'";
    //echo $selectsql;die;
    $result = mysqli_query($connection,$selectsql);
    // echo $selectsql;die;

    if(mysqli_num_rows($result)>0){

    


 while( $row = $result->fetch_assoc()){
      if($token === $row['token']){
          header('location:createnewPassword.php');
      }else{
        $err = 'token not matched';
      }
 }
}else{
  $err .=  "Please enter The Otp";
}

}
?>

    
<div class="container col-lg-8">
<form id="register-form"  autocomplete="on" method="post">   
    <h3 class="text-center ">Please Enter OTP</h3> 
  <div class="form-group">
  <label for="email">Please enter otp:</label>
	  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
	  <input type="number" class="form-control" name="token" placeholder="Enter otp"  >
	</div>
    <div class="form-group">
	<input type="submit" name="submit" class="btn btn-primary" value="Enter Otp" >
  </div>
  <span class="text-danger"><?php  echo $err;?></span>
</div>

<?php 
include "footer.php";