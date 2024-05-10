<?php
define("PAGE", "Accedi");
include("layouts/header.php");
include("layouts/menu.php");
?>

<div class="content">
  <form action="utility/login.php" method="POST" class="form" autocomplete="off">

    <h1 class="title">Accedi</h1>

    <div class="input-section">
      <label for="email-login">Email <span class="required-color">*</span></label>
      <input type="email" name="email-login" id="email-login" required>
      <span id="email-login-error" class="hide required-color error-message">Email non valida!</span>
      <span id="empty-email-login" class="hide required-color error-message">L'email non può essere vuota!</span>
    </div>

    <div class="input-section">
      <label for="password-login">Password <span class="required-color">*</span></label>
      <input type="password" name="password-login" id="password-login" required>
      <span id="password-login-error" class="hide required-color error-message">La password deve contenere lettere, numeri, simboli speciali,<br> e una lunghezza di almeno 8 caratteri!</span>
      <span id="empty-password-login" class="hide required-color error-message">La password non può essere vuota!</span>
    </div>

    <button type="submit" value="Accedi" class="submit-button">Accedi</button>

    <p>Non hai ancora un account? <a href="register.php">Registrati</a></p>

    <div>
      lucarossi@mail.com
      Banana22!
    </div>

  </form>
</div>

<?php
include("layouts/footer.php");
?>