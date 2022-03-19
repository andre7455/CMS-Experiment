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

if($userRow[1]["password"] = $userRow){
    header("Location: https://google.com");
    die();
} else {
    header("Location: https://bing.com");
    die();
}
?>