<!DOCTYPE html>
<?php

include "DatabaseConfig.php";


$dbconfig = new DatabaseConfig;
$id = htmlspecialchars($_GET["id"]);
$stmt = "DELETE FROM `gebruiker` WHERE `ID` = $id";


$stmt = $dbconfig->connect()->prepare($stmt);
$stmt->execute();

header("Location: klantenoverzicht.php");
?>