<?php

require_once('config.php');

// Ottieni i valori inviati dal form
$email = $_POST['email'];
$password = $_POST['password'];

// Prepara una query SQL sicura per evitare SQL Injection
$sql = "SELECT * FROM utenti WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

// Verifica se l'utente esiste e se la password è corretta
if ($result->num_rows > 0) {
  // L'utente esiste, quindi inizia una sessione
  session_start();
  $user = $result->fetch_assoc();
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['user_name'] = $user['nome'];
  $_SESSION['user_email'] = $user['email'];

  // Redireziona l'utente alla pagina del profilo o un'altra pagina protetta
  header("Location: ../welcome.php");
} else {
  // Se l'email o la password non sono corretti, mostra un messaggio di errore
  echo "Email o password non corretti. <a href=\"../login.php\">Riprova</a>";
}

// Chiudi la connessione al database
$stmt->close();
$conn->close();
