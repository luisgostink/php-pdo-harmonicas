<?php

require "./include/tools.php";

// Verbinde mit mySQL, mit Hilfe eines PHP PDO Object
// Connect SQL with help from a PHP PDO Object
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);

// Setze den Fehlermodus für Web Devs
// Sets the ErrorMode for WebDevs
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function updateHarmonicas($dbConnectionParam) {
    // $_POST auslesen.
    
    // prettyPrint($_POST);

    /*if (isset($_POST['deleteID']) && $_POST['deleteID'] > 0){
        // Delete the book with the associated 'deleteID'.
        $deleteID = $_POST['deleteID'];
    
        // echo "<p>\deleteID = $deleteID</p>"; // DEVONLY

        $sqlStatement = $dbConnectionParam->query("DELETE FROM `books` WHERE `id` = $deleteID");
        $sqlStatement->execute(); 
   
    } */
    
    if (isset($_POST['editID'])) {
        // Buchdaten in der Datenbank aktualisieren
        $editID = $_POST['editID'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $type = $_POST['type'];
        
        $sqlStatement = $dbConnectionParam->query("UPDATE `harmonicas` SET `brand` = '$brand', `model` = '$model', `type` = '$type' WHERE `id` = $editID");
        $sqlStatement->execute();
    }
    else {
        // Keine weitere aktionen mit der Datenbank. 
    }


}


?>