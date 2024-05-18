<?php
define("PAGE", "Accedi");
include("layouts/header.php");
include("layouts/menu.php");
?>

<div class="content">
  <form action="utility/login.php" method="POST" class="form" autocomplete="off" id="login-form">

    <h1 class="title">Accedi</h1>

    <div class="input-section">
      <label for="email">Email <span class="required-color">*</span></label>
      <input type="email" name="email" id="email" required aria-label="Inserisci la tua email" autocomplete="email">
    </div>

    <div class="input-section">
      <label for="password">Password <span class="required-color">*</span></label>
      <input type="password" name="password" id="password" required aria-label="Inserisci la tua password" autocomplete="password">
    </div>

    <input type="submit" value="Accedi" class="submit-button">

    <p>Non hai un account? <a href="register.php">Registrati</a></p>

  </form>
</div>

<script src="js/script.js"></script>

<?php
include("layouts/footer.php");
?>