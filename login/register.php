<?php
define("PAGE", "Registrati");
include("layouts/header.php");
include("layouts/menu.php");
?>

<div class="content">
  <form action="utility/register.php" method="POST" class="form" autocomplete="off" id="registration-form">

    <h2 class="title">Crea un account</h2>

    <div class="input-section">
      <label for="first-name-input">Nome <span class="required-color">*</span></label>
      <input type="text" name="first-name" id="first-name-input" required aria-label="Inserisci il tuo nome">      
    </div>

    <div class="input-section">
      <label for="last-name-input">Cognome <span class="required-color">*</span></label>
      <input type="text" name="last-name" id="last-name-input" required aria-label="Inserisci il tuo cognome">      
    </div>

    <div class="input-section">
      <label for="email">Email <span class="required-color">*</span></label>
      <input type="email" name="email" id="email" required aria-label="Inserisci la tua email">      
    </div>

    <div class="input-section">
      <label for="password">Password <span class="required-color">*</span></label>
      <input type="password" name="password" id="password" required aria-label="Inserisci la tua password">      
    </div>

    <div class="input-section">
      <label for="verify-password">Conferma Password <span class="required-color">*</span></label>
      <input type="password" name="verify-password" id="verify-password" required aria-label="Conferma la tua password">
    </div>

    <input type="submit" value="Registrati ora" class="submit-button">

    <p>Hai già un account? <a href="index.php">Accedi</a></p>

  </form>
</div>


<?php
include("layouts/footer.php");
?>