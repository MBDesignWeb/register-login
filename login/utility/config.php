<?php

//PDO Connection
$servername = "127.0.0.1";
$username = "root";
$passworddb = "root";
$dbname = "db_register";

try {
    $db = new PDO("mysql:=$servername;dbname=$dbname", $username, $passworddb);
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header("Location: ../welcome.php");
} catch (PDOException $e) {
    print "Errore!: " . $e->getMessage() . "<br/>";
    die();
}

?>
