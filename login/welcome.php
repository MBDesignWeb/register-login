<?php
session_start();

// Verifica se l'utente è loggato
if (!isset($_SESSION['user_id'])) {
  // Se non è loggato, redirezionalo alla pagina di login
  header("Location: login.php");
  exit();
}

define("PAGE", "Profilo");
include("layouts/header.php");
include("layouts/menu.php");
?>

<div class="content welcome-page">
  <h1 class="headline">Area privata</h1>
  <h2>Benvenuto, <?php echo $_SESSION['user_name']; ?>!</h2>
  <p>Email: <?php echo $_SESSION['user_email']; ?></p>
  <a href="index.php" class="button-frame">Esci <span></span></a>
</div>

<script src="js/script.js"></script>

<?php
include("layouts/footer.php");
?>