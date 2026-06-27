<?php

$ct1= $_GET['ct1'];
$ct2= $_GET['ct2'];
$ct3= $_GET['ct3'];
$ct4= $_GET['ct4'];

$mark=[$ct1,$ct2,$ct3,$ct4];
// // decending order
// rsort($mark);

// echo $mark;

// // accending order
// sort($mark);
// echo $mark[0];


$avg_of_best3= ($mark[0]+$mark[1]+$mark[2])/3;

echo $avg_of_best3;