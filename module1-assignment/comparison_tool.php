<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comparison Tool</title>
   <style>
     <?php include "styles.css" ?>
   </style>
</head>

<body>
<div class="container">
        <h2>Comparison Tool</h2>
        
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
           <br>
            <button type="submit">Find Larg Number</button>
        </form>
        <div id="result">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
          
            echo ($num1 > $num2) ? $num1 : $num2;
           
        }

        ?>

          
        </div>
    </div>


</body>
</html>
