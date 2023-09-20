<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skip Multiples of 5</title>
</head>
<body>
<?php
for($i=1; $i<=50; $i++){
  if($i%5==0){
    continue;     
  }else{
    echo $i."<br />";
  }
}
?>
</body>
</html>
