<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <!-- PAGE TITLE -->
  <title>Mail - CoralYachts</title>

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
  include 'MailController.php';
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

<!--
  testform voor phpmailer

  <form name="MailForm" action="" method="POST">
    <input type='text' name='email' id='email' placeholder='e-mail'> <br>
    <input type='text' name='subject' id='subject' placeholder='subject'> <br>
    <input type='text' name='text' id='text' placeholder='bericht'> <br>
    <input type='submit' class="btn btn-primary" name='submitMail' id='submitMail' value='mail'>
  </form>

-->
<?php

//Dit zou moeten werken, nmaar doet het op een of andere reden niet. 

/*
  if(isset($_POST["submitMail"])){
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $text = $_POST["text"];
  
    try{
      mailen($email, $subject, $text); 
    }catch(Exception $e){
      echo $e;
    }
  }
*/

?>

<form name="MailForm" action="" method="POST">
  <input type="text" name="naam" id="naam" class="form-control form-control-lg" placeholder="Uw naam"> 
  <br>
  <input type="text" name="onderwerp" id="onderwerp"  class="form-control form-control-lg" placeholder="Onderwerp"> 
  <br>
  <input type="text" name="tekst" id="tekst" class="form-control form-control-lg" placeholder="Typ hier uw bericht"> 
  <br>
  <input type="submit" class="btn btn-primary"  name="stuurMail" id="stuurMail" value="Stuur mail">
</form>

</body>

</html>    