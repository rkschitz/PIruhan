<?php
@session_start();
@$_SESSION['user'] = false;
@session_destroy();
header("location:index.php");
