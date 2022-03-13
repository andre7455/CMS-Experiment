<?php
include "DatabaseConfig.php";


$dbconfig = new DatabaseConfig;

$email = $_POST["registreerEmail"];
$username = $_POST["registreerUsername"];
$password = $_POST["registreerPassword"];
$passwordConfirmed = $_POST["registreerPasswordConfirmed"];

if ($password === $passwordConfirmed) {
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO gebruiker( `Username`, `Email`, `Wachtwoord`) VALUES ('" . $username . "', '" . $email . "', '" . $passwordHashed . "');";
                
    $stmt = $dbconfig->connect()->prepare($sql);
    $stmt->execute();
}

header("Location: index.php");
