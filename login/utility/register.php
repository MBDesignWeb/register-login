<?php

require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Verifica se sono stati inviati dati tramite POST
  $firstName = $connessione->real_escape_string(($_POST['first-name']));
  $lastName = $connessione->real_escape_string(($_POST['last-name']));
  $email = $connessione->real_escape_string($_POST['email']);
  $password = $connessione->real_escape_string($_POST['password']);
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Query
  $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

  if ($connessione->query($sql) === true) {
    echo 'Registrazione avvenuta con successo';
  } else {
    echo 'Errore durante la registrazione utente: ' . $connessione->error;
  }
}

?>