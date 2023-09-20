<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Looping with Increment using a Function</title>
</head>
<body>
<?php
function eventNumberWithFor($start, $end){
  for($start; $start<=$end; $start++){
    if($start%2==0){
      echo $start."<br />";
	}
  }
}
eventNumberWithFor(1, 20);


function eventNumberWithWhile($start, $end){
  while($start <= $end) {
   if($start%2==0){
     echo $start."<br>";
	}
    $start++;
   } 
  }
eventNumberWithWhile(1, 20);

function eventNumberWithDoWhile($start, $end){
  do {
   if($start%2==0){
     echo $start."<br>";
	}
    $start++;
   } while($start <= $end);
  }
eventNumberWithDoWhile(1, 20);
?>
</body>
</html>
