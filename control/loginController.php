<?php

$dbconfig = new DatabaseConfig;

$username = $_POST['email'];
$password = $_POST['password'];

$userQuery = "SELECT * FROM `users` WHERE `Username` = 'andre';";
$userResult = $dbconfig->connect()->prepare($userQuery);
$userResult->execute(array());
$userRow = $userResult->setFetchMode(PDO::FETCH_ASSOC);
$userRow = $userResult->fetchAll();

if($password === $userRow['password']){

}

?>