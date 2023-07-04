<!DOCTYPE html>
<html>
<head>
    
    <title id="title">Harald Tverdal</title>
</head>
<body>

    <?php 
        require "header.html"
        ?>

    <div class="intro">
<header><h1 class="title">PHP test</h1></header>

<?php
    $vari = 10
    while ($vari > 1) {
        $vari--;
        echo "test";
    }
?>

<p>Hello World</p>

</div>

<?php
    require "footer.html"
    ?>
</body>
</html>
