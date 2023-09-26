<?php
function sortArray($grades)
 {
    rsort($grades);	
	foreach($grades as $value){
     echo $value."<br>";
    }   	
 }
$grades=[85, 92, 78, 88, 95];
sortArray($grades);
?>