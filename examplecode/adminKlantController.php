<!DOCTYPE html>
<?php

include "DatabaseConfig.php";


$dbconfig = new DatabaseConfig;
$id = htmlspecialchars($_GET["id"]);
$stmt = "UPDATE `gebruiker` SET `Rol` = '1' WHERE `gebruiker`.`ID` = $id"; 


$stmt = $dbconfig->connect()->prepare($stmt);
$stmt->execute();

header("Location: klantenoverzicht.php");
?>