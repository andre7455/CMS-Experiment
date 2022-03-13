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
    include 'DatabaseConfig.php';
    $id = htmlspecialchars($_GET["id"]);
    

    $dbconfig = new DatabaseConfig;

    $userQuery = "SELECT * FROM boten WHERE ID= ?";
        $userResult = $dbconfig->connect()->prepare($userQuery);
        $userResult->execute(array($id));
        $userRow = $userResult->setFetchMode(PDO::FETCH_ASSOC);
        $userRow = $userResult->fetchAll();

        // sam als je hier naar kijkt, het enige wat ik wil is de value defineren in de input vakken met de dingen die worden opgehaald. maar ik kom er absoluut niet uit 
if (empty($userRow))
{
    header("Location: https://www.dafk.net/what/");
}


echo '
<br><br><br><br><br><br><br><br><br><br>



<form action="changeboatcontroller.php" method="POST">
  <div class="form-group">
    <label>Boat name</label>

  
    <input name="boatname" type="text" class="form-control" id="name" value= '. $userRow[0]["Titel"] .'>
  </div>

  <div class="form-group">
    <label>Beschijving</label>
    <textarea name="beschijving" class="form-control" value= '. $userRow[0]["Beschrijving"] .'></textarea>
  </div>

  <div class="form-group">
    <label for="">locatie</label>
    <input name="locatie" type="text" class="form-control" name="locatie" id="locatie" value= '. $userRow[0]["Locatie"] .'>
  </div>

  <div class="form-group">
    <label>prijs</label>
    <input name="prijs" type="text" class="form-control" id="prijs" value= '. $userRow[0]["Prijs"] .'>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
';

?>
</body>

