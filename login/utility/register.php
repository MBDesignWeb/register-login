<?php
// Avvia la sessione se non è già stata avviata
session_start();

// Include il file per la connessione al database
include("db_connection.php");

// Verifica la connessione al database
// if ($connessione->connect_error) {
//   $_SESSION["error"] = "Errore di connessione al database: " . $connessione->connect_error;
//   header("Location: ../login/register.php"); // Reindirizza alla pagina di registrazione
//   exit();
// }

// Verifica se il modulo è stato inviato
$errors = array(); // Inizializza un array per memorizzare gli errori

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Funzione per la pulizia dei dati
  function clean_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // Validazione del nome
  if (empty($_POST["first-name"])) {
    $errors["first-name"] = "Il nome è richiesto";
  } else {
    $first_name = clean_input($_POST["first-name"]);
    // Verifica se il nome contiene solo lettere e spazi
    if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
      $errors["first-name"] = "Il nome può contenere solo lettere e spazi";
    }
  }

  // Validazione del cognome
  if (empty($_POST["last-name"])) {
    $errors["last-name"] = "Il cognome è richiesto";
  } else {
    $last_name = clean_input($_POST["last-name"]);
    // Verifica se il cognome contiene solo lettere e spazi
    if (!preg_match("/^[a-zA-Z ]*$/", $last_name)) {
      $errors["last-name"] = "Il cognome può contenere solo lettere e spazi";
    }
  }

  // Validazione dell'email
  if (empty($_POST["email"])) {
    $errors["email"] = "L'email è richiesta";
  } else {
    $email = clean_input($_POST["email"]);
    // Verifica se l'email è valida
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors["email"] = "Formato email non valido";
    }
  }

  // Validazione della password
  if (empty($_POST["password"])) {
    $errors["password"] = "La password è richiesta";
  } else {
    $password = clean_input($_POST["password"]);
    // Verifica se la password è lunga almeno 8 caratteri e contiene lettere, numeri e simboli speciali
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
      $errors["password"] = "La password deve contenere almeno 8 caratteri, lettere maiuscole e minuscole, numeri e simboli speciali";
    }
  }

  // Validazione della conferma password
  if (empty($_POST["verify-password"])) {
    $errors["verify-password"] = "Conferma password richiesta";
  } else {
    $verify_password = clean_input($_POST["verify-password"]);
    if ($verify_password !== $password) {
      $errors["verify-password"] = "Le due password non corrispondono";
    }
  }

  // Se non ci sono errori, puoi procedere con l'elaborazione del modulo
  if (empty($errors)) {
    // Processa i dati del modulo
    // Esegui ad esempio l'inserimento nel database o altre operazioni necessarie
    // Redirect o visualizza un messaggio di successo
    header("Location: utility/login.php");
    exit();
  }
}
