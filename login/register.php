<?php
define("PAGE", "Registrati");
include("layouts/header.php");
include("layouts/menu.php");
?>

<div class="content">
  <form action="utilty/register.php" method="POST" class="form" autocomplete="off">

    <h2 class="title">Crea un account</h2>

    <div class="input-section">
      <label for="first-name-input">Nome <span class="required-color">*</span></label>
      <input type="text" name="first-name" id="first-name-input" required>
      <span id="first-name-error" class="hide required-color error-message">Nome non valido!</span>
      <span id="empty-first-name" class="hide required-color error-message">Il nome non può essere vuoto!</span>
    </div>

    <div class="input-section">
      <label for="last-name-input">Cognome <span class="required-color">*</span></label>
      <input type="text" name="last-name" id="last-name-input" required>
      <span id="last-name-error" class="hide required-color error-message">Cognome non valido!</span>
      <span id="empty-last-name" class="hide required-color error-message">Il cognome non può essere vuoto!</span>
    </div>

    <div class="input-section">
      <label for="email">Email <span class="required-color">*</span></label>
      <input type="email" name="email" id="email" required>
      <span id="email-error" class="hide required-color error-message">Email non valida!</span>
      <span id="empty-email" class="hide required-color error-message">L'email non può essere vuota!</span>
    </div>

    <div class="input-section">
      <label for="password">Password <span class="required-color">*</span></label>
      <input type="password" name="password" id="password" required>
      <span id="password-error" class="hide required-color error-message">La password deve contenere lettere, numeri, simboli speciali,<br> e una lunghezza di almeno 8 caratteri!</span>
      <span id="empty-password" class="hide required-color error-message">La password non può essere vuota!</span>
    </div>

    <div class="input-section">
      <label for="verify-password">Conferma Password <span class="required-color">*</span></label>
      <input type="password" name="verify-password" id="verify-password" required>
      <span id="verify-password-error" class="hide required-color error-message">Le due password non corrispondono!</span>
      <span id="empty-verify-password" class="hide required-color error-message">La password non può essere vuota!</span>
    </div>

    <input type="submit" value="Registrati oa" class="submit-button">

    <p>Hai già un account? <a href="../login/index.php">Accedi</a></p>

  </form>
</div>

<?php
include("layouts/footer.php");
?>