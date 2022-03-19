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

if($userRow[0]['password'] === $password){
    header("Location: https://google.com");
} else {
    header("Location: https://bing.com");
}
die();
?>