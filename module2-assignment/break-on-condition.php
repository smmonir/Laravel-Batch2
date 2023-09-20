<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Break on Condition</title>
</head>

<body>
<?php 
function factorial($n){
    $f1 = 0;
    $f2 = 1;
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
		if($f3>100){
		  break;
		}else{
          echo $f3 ."<br />";
		}
    }
}
factorial(15);
?> 
</body>
</html>
