<?php

define("DB_HOST", "mysql27-farm15.uni5.net");
define("DB_NAME", "copavisconde");
define("DB_USER", "copavisconde");
define("DB_PASS", "Ruhan2022");

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
