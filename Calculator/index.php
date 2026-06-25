<?php

function add($num1, $num2){
    return $num1+$num2;
}

$num1= $_POST['first'];
$num2=$_POST['second'];

$Sum=add(  $num1, $num2);

//$Sum= $num1+ $num2;


//$num1;
//$num2;
//$Sum= $_POST['first'] + $_POST['second'];

echo "The Sum of Two number ". $Sum;

?>