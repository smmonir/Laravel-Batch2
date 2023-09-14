<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Even or Odd Checker</title>
<style>
<?php include "styles.css" ?>
</style>
</head>
<body>
<div class="container">
 <h2>Even or Odd Checker</h2>
 <form method="post" action="">
  <input type="number" name="num1" placeholder="Enter a number" required>
  <br>
  <br>
  <button type="submit">Check</button>
 </form>
 <div id="result">
  <?php
         $num1 =NULL;
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
          
            if($num1 % 2 == 0){
			 echo "this is even number";
			}else{
			 echo "this is odd number";
			}
           
        }

        ?>
 </div>
</div>
</body>
</html>
