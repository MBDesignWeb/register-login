<?php

require_once('config.php');

// Ottieni i valori inviati dal form
$email = $_POST['email'];
$password = $_POST['password'];

// Prepara una query SQL sicura per evitare SQL Injection
$sql = "SELECT * FROM utenti WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Verifica se l'utente esiste
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Verifica se la password è corretta
    if (password_verify($password, $user['password'])) {
        // L'utente esiste e la password è corretta, quindi inizia una sessione
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nome'];
        $_SESSION['user_email'] = $user['email'];

        // Redireziona l'utente alla pagina del profilo o un'altra pagina protetta
        header("Location: ../welcome.php");
        exit();
    } else {
        // Se la password non è corretta, mostra un messaggio di errore
        echo "Email o password non corretti. <a href=\"../login.php\">Riprova</a>";
    }
} else {
    // Se l'utente non esiste, mostra un messaggio di errore
    echo "Utente non presente nei nostri sistemi. <a href=\"../login.php\">Riprova</a>";
}

// Chiudi la connessione al database
$stmt->close();
$conn->close();
?>
