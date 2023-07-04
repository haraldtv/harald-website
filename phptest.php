
<?php
    echo "<table border='1'>";
    for ($ytre_teller=1; $ytre_teller<=9; $ytre_teller++) {
        echo "<tr>";

        for ($indre=1; $indre<=9; $i++) {
            $tall = $indre*$ytre_teller;
            echo "<td>$tall</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
