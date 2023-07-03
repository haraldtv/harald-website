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
<header><h1 class="title">Harald Martin Tverdal</h1></header>
<p>
    <!--<p style="max-width: 40em;">I'm an electronics engineering students with an interest in hardware and programming. This page contains some of my recent blog posts and projects :)</p> -->
    <img src="profile_pic.png" alt="Picture of me" style="width:15em;float:right">
</p>
<p style="max-width: 42em;">I'm an electronics engineering students with an interest in hardware and software. This page contains some of my recent blog posts and projects. A lot of my original content on this site is free to use for any non-commercial purpouse, which you can read more about <a href="license.html">here</a>. Feel free to contact me at contact@tverdal.com :)</p>
<?php
    echo "Dagens dato: ";
    echo date("d.m.y");
    ?>
    v3

</div>

<?php
    require "footer.html"
    ?>
</body>
</html>
