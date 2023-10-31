<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>
<h1 style="text-align:center; padding-top:100px;">Welcome to user dashboard</h1>


