<?php

echo '<h1>PHP Cookies</h1>';
echo "<br>";

echo '<h3>PHP Create/Retrieve a Cookie</h3>';
echo "<br>";
$cookie_name = "user";
$cookie_value = "Jitendra";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("user", "", time() - 3600); //Delete a Cookie
setcookie("test_cookie", "test", time() + 3600, '/'); //Check if Cookies are Enabled

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>
</body>
</html>