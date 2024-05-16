<?php

require_once('config.php');

// Ottieni i valori inviati dal form
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Query per inserire i dati nel database
$sql = "INSERT INTO utenti (nome, cognome, email, password)
        VALUES ('$first_name', '$last_name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registrazione avvenuta con successo!";
} else {
    echo "Errore durante la registrazione: " . $conn->error;
}

// Chiudi la connessione al database
$conn->close();
?>