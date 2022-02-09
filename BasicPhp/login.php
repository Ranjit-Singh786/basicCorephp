<?php

require('header.php');
include("dataBase/Db.php");
session_start();
// session_destroy();

    // do something ....
    //global $connection;
    if(isset($_SESSION['name']) && isset($_SESSION['email'])){
      header('location:Corephp/dashboard.php');
    }else{
   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //echo "hello";
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);
   $sql = "select * from crud where email ='$email' and password ='$password'";
   $result = mysqli_query($connection,$sql);
   $numrows = mysqli_num_rows($result);
   if($numrows ){
     $fetch = mysqli_fetch_assoc($result);
       header('location:Corephp/dashboard.php');
      $_SESSION['email'] = $fetch['email'];
      $_SESSION['name'] = $fetch['name'];
        echo "<pre>";
       print_r($_SESSION);
       echo "</pre>";
       die;
     }
       //$_SESSION['name'] = $username;
       //print_r($_SESSION['name']);else{
       echo "<h3 style='color:red;'>please enter valid crediatls</h3>";
}
    }
    

?>


<div class="container bg-light col-lg-6 mt-4">
  <h2 class="text-center text-success">Login Here</h2>
  <form method='post'>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    
    <button type="submit" class="btn btn-success">Submit</button>
    <a href="forgotpassword.php" class="btn btn-warning" >Forgot Password</a>
  </form>
</div>
<?php
include "footer.php";
?>