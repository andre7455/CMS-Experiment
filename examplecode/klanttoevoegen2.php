<?php

$page_title = 'add a product';

include 'includes/header.php';
include "DatabaseConfig.php";

$product = $_POST['product'];
$catogorie = $_POST['catogorie'];
$prijs = $_POST['prijs'];

$sql = 'INSERT INTO product ( `product`, `catogorie`, `prijs` ) VALUES ( "' . $product . '", "' . $catogorie . '", "' . $prijs . '" )';

echo '<h1>[ADMIN] Slijterij stuk in m`n kraag </h1>';


if ($conn->query($sql)) {
    echo "<p>The product has succesfully been added</p>";
} else {
    echo "<p>The product could not be added</p>";
}

echo '<p><a href="admin.php">Terug naar het overzicht</a></p>';

include 'includes/footer.php';

?>