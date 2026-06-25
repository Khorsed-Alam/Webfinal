<?php


function calculate_pizza($student_count, $slice_per_pizza, $slice_per_student, $price_per_pizza)
{
 $total_slice_needed= $student_count * $slice_per_pizza;
 $pizza_needed= $total_slice_needed/$slice_per_pizza;
 $pizza_needed=ceil($pizza_needed);

 $total_cost= $pizza_needed* $price_per_pizza;

 return $total_cost;
}

$student_count = $_POST["tatal_Student"];
$slice_per_pizza = $_POST["slice_per_pizza"];
$slice_per_student = $_POST["slice_per_Student"];
$price_per_pizza = $_POST["price_per_pizza"];


$cost= calculate_pizza($student_count,$slice_per_pizza,$slice_per_student,$price_per_pizza);


if($cost>5000){
    $cost=0.9* $cost;// apply 10% discount
}
echo "Total cost of Pizza: ".$cost;
?>