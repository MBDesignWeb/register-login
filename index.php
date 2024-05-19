<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Homepage per accedere all'area riservata.">
  <link rel="stylesheet" type="text/css" href="login/style.css">
  <link rel="shortcut icon" href="img/favicon.webp" type="image/x-icon">
  <title>Register & Login</title>
</head>

<body>

  <?php
  define("PAGE", "Home");
  include("layouts/header.php");
  ?>

  <div class="content">

    <div class="homepage-text">
      <h1 class="headline">Benvenuti nel portale!</h1>
      <h2 class="subheadline">Accedi all'area privata oppure registrati!</h2>
    </div>

    <div class="homepage-button">
      <a href="login/index.php" class="button-frame">Login <span></span></a>
      <a href="login/register.php" class="button-frame">Registrati <span></span></a>
    </div>

  </div>

</body>

</html>