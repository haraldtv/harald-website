<?php
    define ("PASSWORD_KEY", "passord");
    define ("USERNAME", "admin");
    if (($_REQUEST["pwd"] == PASSWORD_KEY) and ($_REQUEST["uid"]) == USERNAME) {
        echo "SUCESS!!";
        echo "<br>Your ip: $_SERVER[REMOTE_ADDR]";
    }
    else 
        echo "Failure";