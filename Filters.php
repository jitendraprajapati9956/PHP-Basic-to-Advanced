<?php

echo "<h1>PHP Filters</h1>";
echo "<br>";

?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

</body>
</html>

<?php


echo  "<h2>PHP filter_var() Function</h2>";

echo  "<h2>Sanitize a String</h2>";

echo "<br>";
$str = "<h2>Hello Jitendra,How Are You</h2>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

echo "<br>";

echo  "<h2>Validate an Integer</h2>";

$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo "<br>";

$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo "<br>";

echo  "<h2>Validate an IP Address</h2>";

$ip = "192.168.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}

echo "<br>";

echo  "<h2>Sanitize and Validate an Email Address</h2>";

$email = "jitu@gmail.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

echo "<br>";

echo  "<h2>Sanitize and Validate a URL</h2>";

$url = "https://www.google.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}


echo "<br>";
echo "<br>";
echo  "<h1>PHP Filters Advanced</h1>";

echo  "<h2>Validate an Integer Within a Range</h2>";

/* variable to check */
$int = 122;

/* min value */
$min = 1;
/* max value */
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}

echo "<br>";
echo  "<h1>Validate IPv6 Address</h1>";

// Variable to check
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

// Validate ip as IPv6
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo("$ip is a valid IPv6 address");
} else {
  echo("$ip is not a valid IPv6 address");
}

echo "<br>";
echo  "<h1>Validate URL - Must Contain QueryString</h1>";

// Variable to check
$url = "https://www.google.com";

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
}

echo "<br>";
echo  "<h1>Remove Characters With ASCII Value > 127</h1>";

// Variable to check
$str = "<h1>Hello WorldÆØÅ!</h1>";

// Remove HTML tags and all characters with ASCII value > 127
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>