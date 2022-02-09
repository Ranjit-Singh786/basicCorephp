<?php
class car{
    public $color='blue';
    function __CONSTRUCT(){
        $this->color = 'red';
    }
}
$obj = new car();
echo $obj->color;
echo "<br>";
static $a = 15;
echo $a;

?>