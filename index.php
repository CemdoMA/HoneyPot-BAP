<?php
require "log_libs/logs.php";
server_log("pageload", "index.php");

session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <title>Login</title>

    </head>
    <body>
    <?php
    if(isset($_SESSION['user'])) {
        echo "Welkom! You're logged in as: admin";
    } else {
        echo "<div class=\"container\">";
        echo "<form id='contact' method=\"post\" action=\"process.php\">";
        echo "<h3><span title='EasterEgg Joke'><i>Log</i></span> hier onder in!</h3>";
        echo "<fieldset><input name=\"user\" type=\"text\" placeholder=\"Username\"  required autofocus/></fieldset>";
        echo "<fieldset><input name=\"pass\" type=\"password\" placeholder=\"Password\" required/></fieldset>";
        echo "<fieldset><input title='Ja dit kan je klikken...' type=\"submit\" value=\"Login\" id=\"contact-submit\"/></fieldset>";
        echo "</form>";
        echo "</div>";
    }
    ?>

    </body>
</html>

