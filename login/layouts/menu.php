<?php
include("layouts/header.php");
?>

<div class="adminmain">

  <!-- Logo -->
  <a href="index.php" class="logo">
    <img src="img/logo.webp" alt="Logo" height="35" width="35" class="logo-image">
  </a>

  <!-- Admin Menu -->
  <ul class="adminmenu">

    <li>
      <a href="index.php">
        <img src="img/user.svg" alt="accedi">
        <span class="menu-name">Login</span>
      </a>
    </li>

    <li>
      <a href="register.php">
        <img src="img/plus.svg" alt="registrati">
        <span class="menu-name">Registrati</span>
      </a>
    </li>

  </ul>

  <ul class="adminmenu">

    <li class="openmenu">
      <a href="#">
        <img src="img/chevron-left.svg" alt="area riservata" class="adminmenu-arrow">
        <span class="menu-name">Riduci</span>
      </a>
    </li>

  </ul>

</div>

<?php
include("layouts/footer.php");
?>