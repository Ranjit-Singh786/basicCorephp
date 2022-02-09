<?php
//operators in php
//1. arithmetic operators
$num = 22;
$get = 23;
echo $num+$get;
echo "<br>";
echo $num-$get;
echo "<br>";
echo $num*$get;
echo "<br>";
echo $num%$get;
echo "<br>";
echo $num/$get;
echo "<br>";

$i =3;
$j = 2;
echo $i**$j;
echo "<br>";

//2. assignment operators
echo "<br>";
echo "<br>";
$assign = 15;
$val = 4;
echo $assign = $assign-$val;
echo "<br>";
echo "<br>";
$a =3;
echo $a = $a+5;
echo "<br>";
echo "<br>";
$n = 4;
echo $n = $n*5;
echo "<br>";
echo "<br>";

$g = 4;
echo $g = $g/$val;
echo "<br>";
echo "<br>";
$ex = 4;
echo $ex**4;
echo "<br>";
echo "<br>";

//comparison operators
//double equal not check the datatype either value stored string or integer 
$x =4;
$y = "4";
if($x ==$y){
    echo "true values";
}else{
    echo "not true values";
}
echo "<br>";
echo "<br>";
//tripple equal check the datatype

$che =4;
$data = "4";
if($x ===$y){
    echo "true values";
}else{
    echo "not true values";
}

//not equal to return true if x is not equal to y
echo "<br>";
echo "<br>";
$x = 4;
$y = 3;
if($x !=$y){
    echo 'true values';
}else{
    echo 'false values';
}
echo "<br>";
echo "<br>";
//not equal greater then and less then

$num = 6;
$aj = 4;

echo $num <> $aj ? 'yes values is different':'same values';
echo "<br>";
echo "<br>";

$a = 13;
$j = "13";
echo $a!==$j?"values is different": 'values not different';
echo "<br>";
echo "<br>";
$n =2;
$nj = 4;
echo $n<$nj?"true":'false';

//spaceship operator in php

$k =4;
$j =3;
echo $k<=>$j;





 















?>