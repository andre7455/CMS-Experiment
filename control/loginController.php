<?php
include '../includes/databaseConfig.php';

$dbconfig = new DatabaseConfig;

$email = $_POST["email"];
$password = $_POST["password"];

//sanitizer (maybe that needs to be done much sooner and maybe i need a wrapper

//$password = password_hash($password, ) i need to password hash this