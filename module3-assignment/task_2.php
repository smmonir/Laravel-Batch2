<?php
function remove_even_number($number)
 {
    return  $number % 2==1;
 }
$numbers=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$filteredNumbers = array_filter($numbers,"remove_even_number");
foreach($filteredNumbers as $value){
  echo $value."<br>";
}
?>