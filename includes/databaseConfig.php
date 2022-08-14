<?php 
class DatabaseConfig
{
    // definieer Database Host, Gebruiker, Wachtwoord en Databasenaam,
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "TestCMS";

    public function connect()
    {
        //definieer soort database
        $dataSoortName = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        //maak database connectie
        $pdo = new PDO($dataSoortName, $this->user, $this->pwd);
        //set fetchmodus
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }


//a function that can be used to s
function SQL($stmt){
    $dbconfig = new DatabaseConfig;
    $stmt = $dbconfig->connect()->prepare($stmt);
    $stmt->execute();
return 'true';
}
}

//include DatabaseConfig.php in php bestanden waar je er bij moet
?>

