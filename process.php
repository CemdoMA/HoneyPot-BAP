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
session_start();
require "helpers/logs.php";

if($_POST) {

        $user = strip_tags($_POST['user']);
        $pass = strip_tags($_POST['pass']);

        if($user == "admin" && $pass == "password") {
            $_SESSION['user'] = "admin";
            server_log("$user","attempt login successfull", "process.php");
            echo "Successfully logged in, redirecting in a few seconds...";
//            header("Refresh:2; url=index.php");

            exit();
        }else{
            server_log("$user","attempt login failed", "process.php");
            echo "
            <div class=\"container\">
  <form id=\"contact\" action=\"\" method=\"post\">
    <h3>Error!</h3>
    <h4>Wrong Username or Password! <i><strong>Try Again.</i></strong></h4>
    <div>Redirected to index: <span id=\"time\">00:05</span> seconds!</div>
  </form>
</div>
            ";
            header("refresh:6;url=index.php");
        }


}
?>
<script>
    function startTimer(duration, display) {
        var timer = duration, seconds;
        setInterval(function () {

            seconds = parseInt(timer % 6, 10);


            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = "00" + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    window.onload = function () {
        var fiveMinutes = 5,
            display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };

</script>
</body>

</html>

