<?php
include "DatabaseConfig.php";

//verbinding met database
$dbconfig = new DatabaseConfig;

//haalt postvariabelen op
$email = $_POST["loginEmail"];
$password = $_POST["loginPassword"];

//als postvariabelen waardes hebben, voert het dit uit
if(isset($_POST["loginSubmit"])){
    //haalt alle gebruikers gegevens op uit de database waar de email overeenkomt met de opgegeven email en stopt het in een array 
    $userQuery = "SELECT * FROM gebruiker WHERE Email= ?";
    $userResult = $dbconfig->connect()->prepare($userQuery);
    $userResult->execute(array($email));
    $userRow = $userResult->setFetchMode(PDO::FETCH_ASSOC);
    $userRow = $userResult->fetchAll();

    //als de array niet leeg is, voert het dit uit
    if(!empty($userRow)){
        $i = 0;
        $rowLength = count($userRow);
        while ($i <= $rowLength) {
            //controleert of het wachtwoord overeenkomt met het hashed wachtwoord in de database
            if (password_verify($password, $userRow[$i]['Wachtwoord'])) {
                //stopt de database gegevens in sessie variabelen
                @session_start();
                $_SESSION["userEmail"] = $userRow[$i]['Email'];
                $_SESSION["username"] = $userRow[$i]['Username'];
                $_SESSION["userRole"] = $userRow[$i]['Rol'];
                header("Location: index.php");
                unset($_POST["loginSubmit"]);
            }
            $i++;
            if ($i == $rowLength) {
                //foutmelding
                print_r("Er is iets fout gegaan, neem contact op met de systeembeheerder");
            }
            print_r("Er is iets fout gegaan, neem contact op met de systeembeheerder");
        }    
        print_r("Er is iets fout gegaan, neem contact op met de systeembeheerder");   
    }
    print_r("Er is iets fout gegaan, neem contact op met de systeembeheerder");
}

