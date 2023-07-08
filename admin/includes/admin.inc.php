<?php
    define ("PASSWORD_KEY", "passord");
    define ("USERNAME", "admin");
    if ((($_REQUEST["pwd"] == PASSWORD_KEY) and ($_REQUEST["uid"])  ) == USERNAME) {
        
        echo "<style>";
        echo "h1 {
            color: green;
        }
               
        /* toggle in label designing */
        .toggle {
            position : relative ;
            display : inline-block;
            width : 100px;
            height : 52px;
            background-color: red;
            border-radius: 30px;
            border: 2px solid gray;
        }
               
        /* After slide changes */
        .toggle:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: gray;
            top: 1px;
            left: 1px;
            transition:  all 0.5s;
        }
               
        /* Toggle text */
        p {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
               
        /* Checkbox checked effect */
        .checkbox:checked + .toggle::after {
            left : 49px;
        }
               
        /* Checkbox checked toggle label bg color */
        .checkbox:checked + .toggle {
            background-color: green;
        }
               
        /* Checkbox vanished */
        .checkbox {
            display : none;
        }";
        echo "</style>";

        echo "SUCESS!!";
        echo "<br>Your ip: $_SERVER[REMOTE_ADDR]";

        echo "<br";
        echo "<header><h1>Admin panel</h1></header>";

        echo "<input type='checkbox' id='switch' class='checkbox'>";
        echo "<label for='switch' class='toggle'>";
    }
    else 
        echo "Failure";