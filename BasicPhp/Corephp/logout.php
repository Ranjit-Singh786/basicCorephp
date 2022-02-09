<?php
if(empty($_SESSION))
{
 session_start();
 session_unset();
 session_destroy();
header('location:../login.php');
}
else
{
    echo "not destroy";
}

?>


