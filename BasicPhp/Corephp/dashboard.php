<?php
session_start();
include "../header.php";
if(isset($_SESSION['email']) && isset($_SESSION['name'])){
    
  echo 'welcome '. $_SESSION['email'];
}
else
{
    // do something ....
    
   
    
      //session_unset();
  header("location:../login.php");
  //die();

}










?>
<br><br><br>
<?php
include "../footer.php";
?>