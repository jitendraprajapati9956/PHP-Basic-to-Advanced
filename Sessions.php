<?php
session_start();
echo "<h1>PHP Sessions</h1>";
echo "<br>";

?>
<!DOCTYPE html>
<html>
<body>

<h2>Start a PHP Session</h2><br>
<?php

$_SESSION["favcolor"] = "black";
$_SESSION["favanimal"] = "lion";
echo "Session variables are set.";

echo "<h2>Get PHP Session Variable Values</h2><br>";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
echo "<br>";
print_r($_SESSION);

echo "<br>";

echo "<h2>Modify a PHP Session Variable</h2><br>";
$_SESSION["favcolor"] = "Blue";
print_r($_SESSION);

echo "<br>";


echo "<h2>Destroy a PHP Session</h2><br>";
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "All session variables are now removed, and the session is destroyed."


?>


</body>
</html>