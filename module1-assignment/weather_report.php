<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Weather Report</title>
</head>

<body>
<?php
$temparature=20;
if($temparature>30){
  echo "It's warm";
}else if($temparature>10){
 echo "It's cool.";
}else{
  echo "It's freezing!";
}
?>
</body>
</html>
