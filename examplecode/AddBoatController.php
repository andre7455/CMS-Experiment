<?php
include "DatabaseConfig.php";

$dbconfig = new DatabaseConfig;

$name = $_POST["boatname"];
$beschijving = $_POST["beschijving"];
$locatie = $_POST["locatie"];
$prijs = $_POST["prijs"];

$sql = "INSERT INTO `boten`( `Titel`,`Beschrijving`,`Locatie`,`Prijs`) VALUES ('" . $name . "', '" . $beschijving . "', '" . $locatie . "', '" . $prijs . "')";

$stmt = $dbconfig->connect()->prepare($sql);
$stmt->execute();

header("Location: botenbeheren.php");
?>

