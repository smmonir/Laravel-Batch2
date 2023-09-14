<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grade Calculator</title>
</head>

<body>
<?php
$sub1=80; $sub2=50; $sub3=60;
$result=($sub1+$sub2+$sub3)/3;

if($result>=70){
  echo "Your grade is A";
}else if($result>=60){
 echo "Your grade is B";
}else if($result>=50){
 echo "Your grade is C";
}
else if($result>=40){
 echo "Your grade is D";
}else{
  echo "Your grade is F";
}
?>
</body>
</html>
