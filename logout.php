<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['img']);
session_destroy();
 header("location:index.php");
 exit();
 ?>