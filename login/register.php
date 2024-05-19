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
      <input type="text" name="first-name" id="first-name-input" required aria-label="Inserisci il tuo nome" autocomplete="nome">
      <span id="first-name-error" class="error hide">Il nome deve contenere solo lettere ed essere di almeno 3 caratteri.</span>
      <span id="empty-first-name" class="error hide">Il campo nome non può essere vuoto.</span>
    </div>

    <div class="input-section">
      <label for="last-name-input">Cognome <span class="required-color">*</span></label>
      <input type="text" name="last-name" id="last-name-input" required aria-label="Inserisci il tuo cognome" autocomplete="cognome">
      <span id="last-name-error" class="error hide">Il cognome deve contenere solo lettere ed essere di almeno 3 caratteri.</span>
      <span id="empty-last-name" class="error hide">Il campo cognome non può essere vuoto.</span>
    </div>

    <div class="input-section">
      <label for="email">Email <span class="required-color">*</span></label>
      <input type="email" name="email" id="email" required aria-label="Inserisci la tua email" autocomplete="email">
      <span id="email-error" class="error hide">Inserisci un'email valida.</span>
      <span id="empty-email" class="error hide">Il campo email non può essere vuoto.</span>
    </div>

    <div class="input-section">
      <label for="password">Password <span class="required-color">*</span></label>
      <input type="password" name="password" id="password" required aria-label="Inserisci la tua password" autocomplete="password">
      <span id="password-error" class="error hide">La password deve contenere almeno 8 caratteri, tra cui una lettera maiuscola, una minuscola, un numero e un simbolo.</span>
      <span id="empty-password" class="error hide">Il campo password non può essere vuoto.</span>
    </div>

    <div class="input-section">
      <label for="verify-password">Conferma Password <span class="required-color">*</span></label>
      <input type="password" name="verify-password" id="verify-password" required aria-label="Conferma la tua password" autocomplete="conferma-password">
      <span id="verify-password-error" class="error hide">Le password non coincidono.</span>
      <span id="empty-verify-password" class="error hide">Il campo conferma password non può essere vuoto.</span>
    </div>

    <input type="submit" value="Registrati ora" class="submit-button" id="submit-button">

    <p>Hai già un account? <a href="index.php"">Accedi</a></p>

  </form>
</div>

<script src="js/script.js"></script>

<?php
include("layouts/footer.php");
?>