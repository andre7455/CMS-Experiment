<?php

$page_title = "New customer list";

include 'includes/header.php';

echo '<h1>[Admin] CoralYachts</h1>';
echo '<p>Here you can add the new customers you want</p>';

//formulier
?>

	<form method="POST" action="admin_add2.php">

		<h2>Product Info</h2>


		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="tekst" class="form-control" name="naam" placeholder="Naam Product">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<select name="catogorie" class="form-control">
					<option value="">-</option>
					<option value="bieren">Bieren</option>
					<option value="wijnen">Wijnen</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="tekst" class="form-control" name="prijs" placeholder="Prijs">
			</div>
		</div>

		<button class="btn btn-primary" type="submit">Save product</button>

	</form>


<?php
include 'includes/footer.php';

?>