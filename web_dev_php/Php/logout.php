<?php 
session_start();
session_unset();
session_destroy();
echo '<script> alert(" You are Logged out")</script>';
header("location: ../index.php");


?>