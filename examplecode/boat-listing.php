<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<!-- PAGE TITLE -->
	<title>Boat listings - CoralYachts</title>

	<!-- META-DATA -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="assets/images/favicon.png">

	<!-- CSS:: FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- CSS:: MAIN -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

</head>

<body>
<?php include "header.php";
include 'DatabaseConfig.php'
?>

<!-- code here-->
<div class="container">
	<div class="">
		<img src="" alt="">
	</div>
</div>


<!-- JQUERY:: JQUERY.JS -->
<script src="assets/js/jquery.min.js"></script>

<!-- JQUERY:: BOOTSTRAP.JS -->
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

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

$boatQuery = "SELECT * FROM boten";
$boatResult = $dbconfig->connect()->prepare($boatQuery);
$boatResult->execute(array());
$boatRow = $boatResult->setFetchMode(PDO::FETCH_ASSOC);
$boatRow = $boatResult->fetchAll();
?>


<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>Boot</th>
		<th>Beschrijving</th>
		<th>Locatie</th>
		<th>Prijs</th>
		<th>Reserveer</th>
	</tr>
	</thead>
	<tbody>
	<?php
	if (!empty($boatRow)) {
		$i = 0;
		$rowLength = count($boatRow);
		while ($i < $rowLength) {
			?>
			<tr>
				<th scope="row"><?php echo $boatRow[$i]["ID"] ?></th>
				<td><?php echo $boatRow[$i]["Titel"] ?></td>
				<td><?php echo $boatRow[$i]["Beschrijving"] ?></td>
				<td><?php echo $boatRow[$i]["Locatie"] ?></td>
				<td><?php echo $boatRow[$i]["Prijs"] ?></td>
				<?php
				if ($boatRow[$i]["isRented"] == 0) {
					?>
					<td>
						<button onclick="reserveerMethod">reserveer</button>
					</td>
					<script>
						function reserveerMethod() {
							<?php
							$sql = "UPDATE boten SET isRented = 1 WHERE ID = $i";

							$stmt = $dbconfig->connect()->prepare($sql);
							$stmt->execute();

							header("Location: boat-listing.php");
							?>
						}
					</script>
					<?php
				}
				?>
			</tr>
			<?php
			$i++;
		}
	} else {
		echo "foutje oepsie woepsie uwu";
	}
	?>
	</tbody>
</table>

</body>

</html>


