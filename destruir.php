<?php
session_start();
$email = "";
$senha = "";
session_destroy();
header("location:index.php");
?>