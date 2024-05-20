<?php

require_once('config.php');

// Ottieni i valori inviati dal form
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Crea un hash della password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query per inserire i dati nel database
$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Registrazione avvenuta con successo!");
            window.location.href = "../index.php";
          </script>';
} else {
    echo '<script>
            alert("Registrazione non avvenuta, riprovare!");
            window.location.href = "../register.php";
        </script>';
}

// Chiudi la connessione al database
$conn->close();
