<?php
define("PAGE", "Accedi");
include("layouts/header.php");
include("layouts/menu.php");
?>
<!-- Inserisci questa parte nel tuo HTML -->
<div class="content">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form" autocomplete="off">

    <h1 class="title">Accedi</h1>

    <div class="input-section">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
      <span class="error-message"><?php if(isset($email_error)) echo $email_error; ?></span>
    </div>

    <div class="input-section">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
      <span class="error-message"><?php if(isset($password_error)) echo $password_error; ?></span>
    </div>

    <button type="submit" value="Accedi" class="submit-button">Accedi</button>

    <?php if(isset($login_error)) echo "<p class='error-message'>$login_error</p>"; ?>

    <p>Non hai ancora un account? <a href="register.php">Registrati</a></p>

  </form>
</div>

<?php
include("layouts/footer.php");
?>