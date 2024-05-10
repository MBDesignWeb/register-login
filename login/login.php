<?php
define("PAGE", "Accedi");
include("layouts/header.php");
include("layouts/menu.php");
?>

<div class="content">
  <form action="utility/login.php" method="POST" class="form" autocomplete="off">

    <h1 class="title">Accedi</h1>

    <div class="input-section">
      <label for="email-login">Email</label>
      <input type="email" name="email-login" id="email-login" required>
    </div>

    <div class="input-section">
      <label for="password-login">Password <span class="required-color">*</span></label>
      <input type="password" name="password-login" id="password-login" required>
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