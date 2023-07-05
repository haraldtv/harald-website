<?php


    $matrisen = array();

    for ($i=0; $i<5; $i++) {
        $matrisen[] = pow($i);
    }

    echo "<table>";

    for ($i=0; $i<5; $i++) {
        echo "<tr>";
        echo "<td>$matrisen[$i]</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
