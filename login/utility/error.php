<?php
define("PAGE", "Errore");
include("layouts/header.php");
include("layouts/menu.php");
?>

<div class="content">
    <div class="box error">

        <h1>Login Failed</h1>

        <!-- ERROR -->
        <?php
        echo $_GET['error'];
        ?>

    </div>
</div>

<?php
include("layouts/footer.php");
?>