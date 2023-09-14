<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personal Information</title>
</head>

<body>
<?php
$name="Munir Uddin";
$age=38;
$country="Bangladesh";
$introduction="I am a web developer. I am trying to be expert web developer.";
?>
<table width="200" border="1">
 <tr>
  <th scope="row">Name</th>
  <td><?php echo $name; ?></td>
 </tr>
 <tr>
  <th scope="row">Age</th>
  <td><?php echo $age; ?></td>
 </tr>
 <tr>
  <th scope="row">Contry</th>
  <td><?php echo $country; ?></td>
 </tr>
 <tr>
  <th scope="row">About
  </th>
  <td><?php echo $introduction; ?></td>
 </tr>
</table>

</body>
</html>
