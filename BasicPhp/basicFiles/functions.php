<?php
function hello($name,$dob){
    echo  $name .' and '.$dob;
}
 hello('ranjit',1994);
 echo "<br>";
 hello('rohit',1994);
 echo "<br>";
 hello('rajan',1994);

 echo "<br>";

 //php is a loosly type language 
 function str(int $a, int $b){
        echo $a+$b;
 }

str(5,'4');

?>