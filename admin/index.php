<html>
<?php 
    if ( (isset($_POST["pwd"])) and ($_POST["pwd"] == 'passord') ) {
        define ("PASSWORD_KEY", "passord");
        define ("USERNAME", "admin");
        if ((($_REQUEST["pwd"] == PASSWORD_KEY) and ($_REQUEST["uid"])  ) == USERNAME) {

            echo "SUCESS!!";
            echo "<br>Your ip: $_SERVER[REMOTE_ADDR]";

            echo "<br";
            echo "<header><h1>Admin panel</h1></header>";

            echo "<form ";
        }
        else 
            echo "Failure";
}
else {
?>
<body>
<section class="login_page">

    <header><h1 class="title">Admin login</h1></header>

    <div class="login_form">
        <form action="" method="post">

            <div class="uid_button">
                <input type="text" name="uid" placeholder="username">
            </div>
        <div class="pwd_button">
            <input type="password" name="pwd" placeholder="password">
        </div>
        <div class="login_button">
            <button type="submit" name="submit">Login</button>
        </div>
        </form>
    </div>

</section>

<?php 
    }
?>
</body></html>
