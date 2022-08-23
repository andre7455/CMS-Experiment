<?php
include '../includes/databaseConfig.php';

$dbconfig = new DatabaseConfig;

$username = $_POST['email'];
$password = $_POST['password'];

$userQuery = "SELECT password FROM `users` WHERE `Username` = '". $username ."'";
$userResult = $dbconfig->connect()->prepare($userQuery);
$userResult->execute(array());
$userRow = $userResult->setFetchMode(PDO::FETCH_ASSOC);
$userRow = $userResult->fetchAll();

if($userRow[0]['password'] === $password && $username != "" && $password != ""){
    header("Location: https://google.com");
} else {
    DatabaseConfig.SQL("INSERT INTO `users` (`Username`, `password`) VALUES ('kaas', 'kaas');");
    header("Location: https://bing.com");
}
die();
?>