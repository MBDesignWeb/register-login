<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="login/style.css">
    <link rel="shortcut icon" href="img/favicon.webp" type="image/x-icon">
    <title>Simple PHP Login</title>
</head>

<body>

    <?php
    define("PAGE", "Home");
    include("layouts/header.php");
    ?>

    <div class="content">

        <h1 class="headline">Benvenuti!</h1>
        <h2>Iscrivetevi oppure registratevi!</h2>

        <div class="homepage-button">
            <a href="login/" class="button-frame">Login</a>
            <a href="login/register.php" class="button-frame">Registrati</a>
        </div>

    </div>

</body>

</html>