<?php 
$conn = new mysqli("localhost","root","","register");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

        $sql= mysqli_query($conn,"INSERT INTO register(id,name,email,password,gender,city) 
        VALUES('$usernmae','$email','$password','$gender','$city')");

 ?>