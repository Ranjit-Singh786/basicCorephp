<?php
//session_start();
include "dataBase/Db.php";
include "header.php";
//print_r($_SERVER);die;
if(!empty($_SESSION)){
  header("location:Corephp/dashboard.php");
}

$err = "";
$urr = "";
$allintput = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$sql="select * from crud where (name='$username' or email='$email')";

      $res=mysqli_query($connection,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
            	$err =  "email already exists";
        }
		if($username==isset($row['name']))
		{
			$urr =  "username  already exists";
		}
		}
else{
	

  
    $username = $_REQUEST['username'];
    //echo $username;die;
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);
    //echo $password;die;
    //$md5 = md5($password);
    
    $cpassword = md5($_REQUEST['cpassword']);
    @$gender = $_REQUEST['gender'];
    $city = $_REQUEST['city'];
    
   if($username!='' && $email!='' && $password !='' && $cpassword!='' && $gender!='' && $city !=''){
      if($password ===$cpassword){
         $sql = "INSERT INTO `crud`( `name`, `email`, `password`, `gender`, `city`) VALUES ('$username','$email','$password','$gender','$city')";
         //print_r($sql);die;
       $result = mysqli_query($connection,$sql);
       //echo $result;die;
       if(!empty($result)){
        echo '<script>alert("register successfully")</script>';
        echo "<a href='login.php'>login here</a>";
        //header('location:login.php');
        
         
       }
    
     }else{
       if(empty($password)){
         echo "please enter password";
         
       }else{
         $password = $_REQUEST['password'];
        
       }
        $cpassword = $_REQUEST['cpassword'];
       
        if($password != $cpassword){
         echo "password does not match";
         
       
       }else{
         //echo "done";
       }
     }
   }
   else{
       $allintput =  "please enter all inputs";
     }
   }
}

?>







<div class="container bg-light">
  <h2 class="text-center text-success"><B>REGISTER HERE</B></h2>
  <form  id="FORM_ID" method="post"  name="RegForm">
  <div class="form-group">
  <label for="usr">Username:</label> 
  <input type="text" class="form-control" name="username" placeholder="Enter Username" id="name">
</div><span class="text-danger"><?php echo $urr;?></span>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div><span class="text-danger"><?php echo $err;?></span>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div><span id="message"></span>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Your password" name="cpassword">
    </div><span class="red"><?php if(!empty($err)){ echo 'password doesnt match';}else{ $err;};?></span>
    <div class="form-group">
                    <label for="gen"> Gender:</label><label id="p6">*</label><br/>
                    <input type="radio" name="gender" id="gender" value="Male" >Male
                    <input type="radio" name="gender" id="gender" value="Female" >Female
                </div>
        <div class="form-group" >
			<label for="pwd">City:</label>
			<select name="city" id="city" class="form-control">
      <option value="" selected="selected">Select</option>
				<option value="Delhi">Delhi</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Pune">Pune</option>
				<option value="punjab">Punjab</option>
				<option value="Himachal pradesh">Himachal Pradesh</option>
				<option value="kolkata">kolkata</option>
				<option value="j&k">j&k</option>
				<option value="haryana">haryana</option>
			</select>
		</div>

     <button type="submit"   name ='submit' class="btn btn-success" id="submit" >Submit</button>
     <span class="text-danger"><?php echo $allintput;?></span>
    </form>
</div>
<?php
include "footer.php";
?>
