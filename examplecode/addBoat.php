<?php ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<!-- PAGE TITLE -->
	<title>Home - CoralYachts</title>

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
<?php
include "header.php";
include 'DatabaseConfig.php'
?>
<br><br><br><br><br><br><br><br><br><br>

<form action="AddBoatController.php" method="POST">
	<div class="form-group">
		<label>Boat name</label>
		<input name="boatname" type="text" class="form-control" id="name" placeholder="Costa Concordia">
	</div>

	<div class="form-group">
		<label>Beschijving</label>
		<textarea name="beschijving" class="form-control"
		          placeholder="A spectre is haunting Europe — the spectre of communism. All the powers of old Europe have entered into a holy alliance to exorcise this spectre: Pope and Tsar, Metternich and Guizot, French Radicals and German police-spies."></textarea>
	</div>

	<div class="form-group">
		<label for="">locatie</label>
		<input name="locatie" type="text" class="form-control" name="locatie" id="locatie" placeholder="pyongyang">
	</div>

	<div class="form-group">
		<label>prijs</label>
		<input name="prijs" type="text" class="form-control" id="prijs" placeholder="599,00">
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>

