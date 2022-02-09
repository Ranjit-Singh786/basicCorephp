<?php 

//session_start();
//require "../dataBase/Db.php";
require "../header.php";

  if(isset($_POST['Submit']))
  {
   $oldpass=md5($_POST['oldpass']);
   $useremail=$_SESSION['email'];
   $newpassword=md5($_POST['newpass1']);
  $sql=mysqli_query($connection,"SELECT password FROM userinfo where password='$oldpass' && email='$useremail'");
  $num=mysqli_fetch_array($sql);
  if($num>0)
  {
   $con=mysqli_query($con,"update userinfo set password=' $newpassword' where email='$useremail'");
  $_SESSION['msg1']="Password Changed Successfully !!";
  }
  else
  {
  $_SESSION['msg1']="Old Password not match !!";
  }
  }

?>
<div class="container bg-light">
    <h2 class="text-center text-success"><B>Change Old Password</B></h2>
    <form id="FORM_ID" method="post" name="RegForm">
        <div class="form-group">
            <label for="usr">Old password:</label>
            <input type="password" class="form-control" name="oldpass" placeholder="Enter Username" id="name">
        </div>
        <div class="form-group">
            <label for="usr">New password:</label>
            <input type="password" class="form-control" name="newpass1" placeholder="Enter Username" id="name">
        </div>
        <div class="form-group">
            <label for="usr">Confirm New password:</label>
            <input type="password" class="form-control" name="newpass2" placeholder="Enter Username" id="name">
        </div>
        <div class="form-group">

            <input type="submit" class="btn btn-success" name="submit" placeholder="Enter Username" id="name">
        </div>

        <a href="<?php echo  BASE_URL; ?>dashboard.php" class="bg-light">Home</a>
        <a href="<?php echo  BASE_URL; ?>Corephp/logout.php" class="bg-light">Logout</a>
</div>

<?php 

require "../footer.php";
?>