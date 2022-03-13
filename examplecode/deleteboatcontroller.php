<!DOCTYPE html>
<?php

include "DatabaseConfig.php";


$dbconfig = new DatabaseConfig;
$id = htmlspecialchars($_GET["id"]);
$stmt = "DELETE FROM `boten` WHERE `boten`.`ID` = $id";


$stmt = $dbconfig->connect()->prepare($stmt);
$stmt->execute();

header("Location: botenbeheren.php");
?>