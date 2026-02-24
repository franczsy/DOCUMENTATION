<?php

//math function

echo"<h2>Math Function</h2>";

//1 abs() - returns the absolute value
$number = -10;
echo "abs($number) = " , abs($number) ,"<br>";

//2. round() - rounds a number
$number = 4.6;
echo "round($number) = " , round($number) ,"<br>";

//
$number = 4.2;
echo "ceil($number) = " , ceil($number) ,"<br>";


$number = -10;
echo "floor($number) = " , floor($number) ,"<br>";

$number = 4.2;
echo "pow($number) = " , pow($number) ,"<br>";

$number = 4.2;
echo "sqrt($number) = " , sqrt($number) ,"<br>";


echo "max( 1, 5, 3) = " , max(1, 5, 3) ,"<br>";
echo "min(1, 5, 3) = " , min (1, 5, 3) ,"<br>";


echo "<h2> String Function</h2>"

$str = "Helllo World";
echo "strien('$str') = " , strien($str) ,"<br>";

echo"strtoupper ('$str) = " , strtoupper($str) ,"<br>";

$str3 = "apple, banana, orange";
$fruits = explode(",", $str3);
print_r($fruits);
echo "<br>";

$joined - implode(" - " , $fruits);
echo "implode (' - ' , fruits) =  $joined <br>";
