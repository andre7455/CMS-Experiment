<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <!-- PAGE TITLE -->
  <title>Havens overzicht - CoralYachts</title>

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

$havenQuery = "SELECT * FROM havens";
$havenResult = $dbconfig->connect()->prepare($havenQuery);
$havenResult->execute(array());
$havenRow = $havenResult->setFetchMode(PDO::FETCH_ASSOC);
$havenRow = $havenResult->fetchAll();  
?>


<table class="table">
<thead>
<tr>
  <th>#</th>
  <th>Titel</th>
  <th>Telefoonnummer</th>
  <th>Adres</th>
  <th>Postcode</th>
  <th>Havennummer</th>
  <th>Plaats</th>
</tr>
</thead>
<tbody>
<?php 
    if(!empty($havenRow)){
      $i = 0;
      $rowLength = count($havenRow);
      while ($i < $rowLength) {
        ?>
        <tr>
        <th scope="row"><?php echo $havenRow[$i]["ID"]?></th>
        <td><?php echo $havenRow[$i]["Titel"] ?></td>
        <td><?php echo $havenRow[$i]["Telefoonnummer"]?></td>
        <td><?php echo $havenRow[$i]["Adres"]?></td>
        <td><?php echo $havenRow[$i]["Postcode"]?></td>
        <td><?php echo $havenRow[$i]["Havennummer"]?></td>
        <td><?php echo $havenRow[$i]["Plaats"]?></td>
        </tr>
        <?php
        $i++;
      }
    }
      ?>
  </tbody>
</table>

</body>

</html>    