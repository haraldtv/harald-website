<?php
    define ("PASSWORD_KEY", "passord");
    define ("USERNAME", "admin");
    if (($_REQUEST["pwd2"] == PASSWORD_KEY) and ($_REQUEST["uid"]) == USERNAME) {
        echo "SUCESS!!";
    }
    else 
        echo "Failure";