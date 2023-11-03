<?php
$cookieName = "cs4413";
$cookieValue = "cs4413";
setcookie($cookieName, $cookieValue, time() + (60), "/"); //Expires after 1 minute
?>
<html>
    <head>
        <title id="indexTitle">Lab 12</title>
        <h1 id="indexh1">Lab 12 - Lab12Cookie.php</h1>
        <p class="indexName">John H. McCann IV (xvp850)</p>
    </head>
    <body>
<?php
if(!isset($_COOKIE[$cookieName])) {
  echo "Cookie named '" . $cookieName . "' is not set."; //userTest
  echo "Please refresh the page to set the cookie.";
} else {
  echo "Cookie '" . $cookieName . "' is set.<br>"; //userTest
  echo "Value is: " . $_COOKIE[$cookieName]; //Display name
}
?>
    </body>
</html> 

