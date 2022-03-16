<?php

include '../includes/databaseConfig.php';

$dbconfig = new DatabaseConfig;

//put input into a var

$email = $_POST["email"];
$password = $_POST["password"];

$stmt = "INSERT INTO `users`(`Username`, `password`) VALUES ('" . $email . "','" . $password . "')";

echo $stmt;

$stmt = $dbconfig->connect()->prepare($stmt);
$stmt->execute();


http_redirect("../index.php");

