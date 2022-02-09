<?php
include("../database/Db.php");
//print_r($_POST);

$sql = "select * from crud";
$res = $connection->query($sql);
while($fetch  = mysqli_fetch_assoc($res)){
    
    //print_r($fetch);
    $arr[] = $fetch;
    
   
  
//    $decode = json_decode($data);
//    print_r($decode);
}
echo  json_encode($arr);



// $myObj = new stdClass();
// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";

// $myJSON = json_encode($myObj);

// echo $myJSON;



?>


