<?php
define("PAGE", "Accedi");
include("layouts/header.php");
include("layouts/menu.php");
?>

<div class="content">

  <h1 class="headline">Benvenuti!</h1>
  <h2>Iscrivetevi oppure registratevi!</h2>

  <div class="homepage-button">
    <a href="login/login.php" class="button-frame">Login</a>
    <a href="login/register.php" class="button-frame">Registrati</a>
  </div>

</div>

<?php
include("layouts/footer.php");
?>