<?php
session_start();
if (isset($_SESSION["teller"])) {
    $_SESSION["teller"]++;
}
else{
    $_SESSION["teller"] = 1;
}

print_r($_SESSION);
    ?>
    <p> Antall besøk: <?php echo $_SESSION["teller"] ?> </p>
