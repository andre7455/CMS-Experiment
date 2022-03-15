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

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php

$dbconfig = new DatabaseConfig;

$userQuery = "SELECT * FROM gebruiker";
$userResult = $dbconfig->connect()->prepare($userQuery);
$userResult->execute(array());
$userRow = $userResult->setFetchMode(PDO::FETCH_ASSOC);
$userRow = $userResult->fetchAll();

if (!empty($userRow)) {

	echo '
    <table class="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
    ';

	// output data of each row
	$i = 0;
	$rowLength = count($userRow);
	while ($i < $rowLength) {
		/*
        het is niet nodig om gegevens in een var te zetten en vervolgens alleen te printen je kan ook direct de gegevens printen.

        $userprintName = 
        $userprintEmail = 
        $userprintRol = 
        */

		//echo "Username: " . $userprintName . " - Email: " . $userprintEmail . " - Rol: " . $userprintRol . "<br>";
		echo
				'
            <tr>
            <td>' . $userRow[$i]["Username"] . '</td>
            <td>' . $userRow[$i]["Email"] . '</td>
            <td>' . $userRow[$i]["Rol"] . '</td>
            <td><a href="adminKlantController.php?id=' . $userRow[$i]["ID"] . '">make admin</a></td> 
            <td><a href="deleteKlantController.php?id=' . $userRow[$i]["ID"] . '">delete</a></td> 
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