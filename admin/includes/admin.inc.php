<?php
    define ("PASSWORD_KEY", "passord");
    define ("USERNAME", "admin");
    if (($_REQUEST["pwd"] == PASSWORD_KEY) and ($_REQUEST["uid"]) == USERNAME) {
        echo "SUCESS!!";
    }
    else 
        echo "Failure";