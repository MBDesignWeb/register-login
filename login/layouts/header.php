<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="img/favicon.webp" type="image/x-icon">
  <title><?php echo ucfirst(PAGE); ?></title>
</head>

<body>

  <div class="adminmain">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <img src="img/logo.webp" alt="Logo" height="35" width="35" class="logo-image">
    </a>

    <!-- Admin Menu -->
    <ul class="adminmenu">

      <li>
        <a href="index.php/">
          <img src="img/home.svg" alt="home">
          <span class="menu-name">Home</span>
        </a>
      </li>

      <li>
        <a href="../login/index.php">
          <img src="img/user.svg" alt="accedi">
          <span class="menu-name">Login</span>
        </a>
      </li>

      <li>
        <a href="../login/register.php">
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

