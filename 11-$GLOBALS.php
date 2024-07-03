<?php


//$_SERVER 
echo $_SERVER['PHP_SELF'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['HTTP_HOST'];
echo '<br>';
echo $_SERVER['HTTP_REFERER'];
echo '<br>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '<br>';
echo $_SERVER['SCRIPT_NAME'];
echo '<br>';

echo "<h1>PHP GLOBALS</h1>";
echo "<br>";

echo "<br>";
echo "<h1>Global Variables</h1>";
$x = 75;
$x2 = 75; 
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()

?>