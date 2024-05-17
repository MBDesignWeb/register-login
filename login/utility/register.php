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
    header("Location: ../index.php");
} else {
    echo "Errore durante la registrazione: " . $conn->error . "<a href=\"login/register.php\">Torna alla registrazione</a>";
}

// Chiudi la connessione al database
$conn->close();
?>