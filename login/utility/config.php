<?php

//PDO Connection
$servername = "127.0.0.1";
$username = "root";
$passworddb = "root";
$dbname = "db_register";

// Crea la connessione
$conn = new mysqli($servername, $username, $passworddb, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

?>
