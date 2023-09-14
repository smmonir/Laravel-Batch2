<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Temperature Converter</title>
</head>

<body>
<?php
$fahrenheit=NULL;
$celsius=NULL;
?>
<h3>Celsius to Fahrenheit Conversion</h3>
<?php
$celsius=30;
$fahrenheit = (float)(($celsius * 9 / 5) + 32);
echo "$celsius Celsius = $fahrenheit Fahrenheit ";
?>
<h3>Fahrenheit to Celsius Conversion</h3>
<?php
$fahrenheit = 90;
$celsius = (float)($fahrenheit - 32) / 1.8;
echo "$fahrenheit Fahrenheit = $celsius Celsius";
?>
</body>
</html>
