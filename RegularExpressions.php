<?php

$str = "Welcome to php";
$pattern = "/php/i";
echo preg_match($pattern, $str);
echo "<br>";

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
echo "<br>";



$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "PHP", $str);
echo "<br>";
















?>