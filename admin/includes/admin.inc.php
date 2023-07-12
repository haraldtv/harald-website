<?php
session_start();

$AUTHORIZED_SESSIONID = "abcd32"

if ($_SESSION["lin"] == $AUTHORIZED_SESSIONID) {

}

else {
    printf("ERROR: UNAUTHORIZED ACCESS");
}