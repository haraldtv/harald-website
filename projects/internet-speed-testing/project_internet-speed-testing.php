<!DOCTYPE html>
<html>
<head>
    <title id="title">Harald Tverdal</title>
</head>

<body>
    <?php 
        require "tverdal.com/header.html"
    ?>

    <p><h1>Internet speed testing</h1></p>
    <p> I recently needed to check if there was an issue with my new router, or if the connection to our ISP was the problem. 
        I then wrote this script to run continiously on a computer connected to my router by cable. 
        THe script runs a speed test at set intervals and logs the results to a textfile.
    </p>
    <p><a href="https://github.com/haraldtv/internet-test">Link</a> to github page</p>

    <?php
    require "../../footer.html"
    ?>
</body>
</html>