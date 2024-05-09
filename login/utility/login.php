<?php

// Includi il file di configurazione del database
require_once('config.php');

// Pulisce e protegge i dati forniti tramite il metodo POST
$email = $connessione->real_escape_string($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);

// Controlla se la richiesta è di tipo POST
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

  // Query per selezionare l'utente dal database in base all'username fornito
  $sql_select = "SELECT * FROM utenti WHERE email = '$email'";
  if ($result = $connessione->query($sql_select)) {

    // Se esiste esattamente un risultato
    if ($result->num_rows == 1) {
      // Recupera la riga risultante come array associativo
      $row = $result->fetch_array(MYSQLI_ASSOC);

      // Verifica se la password fornita corrisponde alla password crittografata nel database
      if (password_verify($password, $row['password'])) {
        // Inizia una nuova sessione
        session_start();

        // Imposta le variabili di sessione per tenere traccia dell'accesso
        $_SESSION['logged'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];

        // Reindirizza l'utente all'area privata
        header("location: welcome.php");
      } else {
        // Se la password non corrisponde, mostra un messaggio di errore
        echo "La password non è corretta";
      }
    } else {
      // Se non ci sono account con l'username fornito, mostra un messaggio di errore
      echo "Non ci sono account con quella email";
    }
  } else {
    // Se si verifica un errore durante l'esecuzione della query, mostra un messaggio di errore
    echo "Errore in fase di login";
  }

  // Chiude la connessione al database
  $connessione->close();
}

?>