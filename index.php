<?php
require "helpers/logs.php";
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
        echo "You're logged in as: admin";
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




<!--<div class="container">-->
<!--    <form id='contact' method="post" action="process.php">-->
<!--        <h3>Log hier onder in!</h3>-->
<!--        <fieldset> <input name="user" type="text" placeholder="Username" tabindex='1' required autofocus> </fieldset>-->
<!--        <fieldset> <input name="pass" type="password" placeholder="Password" tabindex='1' required/> </fieldset>-->
<!--        <div class=\"g-recaptcha\" data-sitekey=\"6Le62DIUAAAAAEq_RIgujxfwMrFSqF1fd4Ox7nd1\"></div>-->
<!--        <fieldset> <input type="submit" value="Login" id=\"contact-submit\"/> </fieldset>-->
<!--        </form>-->
<!--    </div>-->


<!--echo "<div class=\"container\">";-->
<!--    echo "<h3>Log hier onder in!</h3>";-->
<!--    echo "<form id='contact' method=\"post\" action=\"process.php\">";-->
<!--        echo "<fieldset><input name=\"user\" type=\"text\" placeholder=\"Username\" tabindex='1' required/></fieldset>";-->
<!--        echo "<fieldset><input name=\"pass\" type=\"password\" placeholder=\"Password\" tabindex='1' required/></fieldset>";-->
<!--        echo "<div class=\"g-recaptcha\" data-sitekey=\"6Le62DIUAAAAAEq_RIgujxfwMrFSqF1fd4Ox7nd1\"></div>";-->
<!--        echo "<fieldset><input type=\"submit\" value=\"Login\" id=\"contact-submit\"/></fieldset>";-->
<!--        echo "</form>";-->
<!--    echo "</div>";-->
<!---->

<!---->
<!--<div class="container">-->
<!--  <form id="contact" action="" method="post">-->
<!--    <h3>Colorlib Contact Form</h3>-->
<!--    <h4>Contact us for custom quote</h4>-->
<!--    <fieldset>-->
<!--      <input placeholder="Your name" type="text" tabindex="1" required autofocus>-->
<!--    </fieldset>-->
<!--    <fieldset>-->
<!--      <input placeholder="Your Email Address" type="email" tabindex="2" required>-->
<!--    </fieldset>-->
<!--    <fieldset>-->
<!--      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>-->
<!--    </fieldset>-->
<!--    <fieldset>-->
<!--      <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>-->
<!--    </fieldset>-->
<!--    <fieldset>-->
<!--      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>-->
<!--    </fieldset>-->
<!--    <fieldset>-->
<!--          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>-->
<!--    </fieldset>-->
<!--  </form>-->
<!--</div>-->
