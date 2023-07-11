<?php
session_start();
if (isset($_SESSION["teller"])) {
    $_SESSION["teller"]++;
}
else
    $_SESSION["teller"] = 1;
    ?>
    <p> Antall besøk: <?php printf($_SESSION["tellet"]) ?> </p>
