<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<!-- FAVICON -->
<link rel="shortcut icon" href="assets/images/favicon.png">

<!-- CSS:: FONTS -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- CSS:: MAIN -->
<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

<?php

$page_title = "Admin - CoralYachts";
include "DatabaseConfig.php";
include "header.php";
?>

<br><br><br><br><br><br><br><br><br><br><br>

<?php

$dbconfig = new DatabaseConfig;

$userQuery = "SELECT * FROM boten";
$userResult = $dbconfig->connect()->prepare($userQuery);
$userResult->execute(array());
$userRow = $userResult->setFetchMode(PDO::FETCH_ASSOC);
$userRow = $userResult->fetchAll();

if (!empty($userRow)) {
	echo '
    <table class="table">
        <thead>
            <tr>
                <th>Titel</th>
                <th>Beschijving</th>
                <th>Locatie</th>
                <th>Prijs</th>
            </tr>
        </thead>
        <tbody>
    ';
	// output data of each row
	$i = 0;
	$rowLength = count($userRow);
	while ($i < $rowLength) {
		/*dit hele stuk is redundant en erg verwarrent voor een andre

        $userprintID = $userRow[$i]["ID"];
        $userprintTitel = $userRow[$i]["Titel"];
        $userprintBeschrijving = $userRow[$i]["Beschrijving"];
        $userprintLocatie = $userRow[$i]["Locatie"];
        $userprintPrijs = $userRow[$i]["Prijs"];
        */


		//echo "Username: " . $userprintName . " - Email: " . $userprintEmail . " - Rol: " . $userprintRol . "<br>";
		echo
				'
            <tr>
            <td>' . $userRow[$i]["Titel"] . '</td>
            <td>' . $userRow[$i]["Beschrijving"] . '</td>
            <td>' . $userRow[$i]["Locatie"] . '</td>
            <td>' . $userRow[$i]["Prijs"] . '</td>
            <td><a href="deleteboatcontroller.php?id=' . $userRow[$i]["ID"] . '">delete</a></td>
            <td><a href="changeboat.php?id=' . $userRow[$i]["ID"] . '">change</a></td>
            </tr>
        ';
		$i++;
		if ($i == $rowLength) {
			break;
		}
	}

	echo
	'
        </body>
    </table>
    ';

} else {
	echo "Geen gegevens in de database gevonden";
}

?>