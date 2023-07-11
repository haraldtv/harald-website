<?php
session_start();
if (isset($_COOKIE"teller"])) {
    $_COOKIE["teller"]++;
}
else
    setcookie("teller", 1, time()+3600);
    ?>
    <p> Antall besøk: <?php echo $_SESSION["tellet"] ?> </p>
