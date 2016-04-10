<?php
session_start();
$name = $_POST['name'];
$_SESSION['panier'] []= $name; 
header('location: index.php');
?>