<?php

echo "<h1>Regular Expressions</h1>";
echo "<br>";

echo "<br>";
echo "<h2>Using preg_match()</h2>";
echo "<br>";

$str = "Welcome to php";
$pattern = "/php/i";
echo preg_match($pattern, $str);
echo "<br>";

echo "<br>";
echo "<h2>Using preg_match_all()</h2>";
echo "<br>";

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
echo "<br>";

echo "<br>";
echo "<h2>Using preg_match_all()</h2>";
echo "<br>";

$str = "Visit Ayodhya!";
$pattern = "/Ayodhya/i";
echo preg_replace($pattern, "Kedarnath", $str);
echo "<br>";

echo "<h3>Regular Expression Modifiers-i</h3>";
echo "<br>";

$txt = "Hello Jitendra";
$pattern = "/s/i";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<h3>Regular Expression Modifiers-m</h3>";
echo "<br>";

$pattern = "/^you/m";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<br>";

echo "<h2>Regular Expression Patterns</h2>";
echo "<br>";


echo "<h4>Find one or many of the characters inside the brackets</h4>";
echo "<br>";
$pattern = "/[co]/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<br>";


echo "<h4>Find any character NOT between the brackets</h4>";
$pattern = "/[^eo]/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<br>";

echo "<h4>Find any character alphabetically between two letters</h4>";
$pattern = "/[e-o]/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<br>";

echo "<h4>Find any character alphabetically between a specified upper-case letter and a specified lower-case letter</h4>";
$pattern = "/[T-e]/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<br>";


echo "<h4>Find any character alphabetically between two upper-case letters.</h4>";
$pattern = "/[A-Z]/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<br>";

echo "<h4>Find one or many of the digits inside the brackets</h4>";
$pattern = "/[123]/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<br>";

echo "<h4>Find any digits between the two numbers</h4>";
$pattern = "/[0-5]/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<br>";

echo "<h4>Find any digits</h4>";
$pattern = "/[0-9]/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);

echo "<br>";


echo "<br>";

echo "<h2>Metacharacters</h2>";
echo "<br>";

$txt = "How Are you now";

echo "<h4>Find a match for any one of the patterns separated by | as in: a|b|c</h4>";
$pattern = "/you|now|Are/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";

echo "<h4>	Find any character</h4>";
$pattern = "/./";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";

echo "<h4>Finds a match as the beginning of a string as in: ^Hello</h4>";
$pattern = "/^W3/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";

echo "<h4>Finds a match at the end of the string as in: World$</h4>";
$pattern = "/World$/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";

echo "<h4>Find any digits</h4>";
$pattern = "/\d/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";

echo "<h4>Find any non-digits</h4>";
$pattern = "/\D/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";


echo "<h4>Find any whitespace character</h4>";
$pattern = "/\s/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";

echo "<h4>Find any non-whitespace character</h4>";
$pattern = "/\S/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";


echo "<h4>Find any alphabetical letter (a to Z) and digit (0 to 9)</h4>";
$pattern = "/\w/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";


echo "<h4>Find any non-alphabetical and non-digit character</h4>";
$pattern = "/\W/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";

echo "<h4>	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b</h4>";
$pattern = "/\bHel/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";

echo "<h4>Find the Unicode character specified by the hexadecimal number xxxx</h4>";
$pattern = "/\u{0039}/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";



echo "<br>";
echo "<h2>Quantifiers</h2>";
echo "<br>";

$txt = "PHP has been live since 1993";

echo "<h4>Matches any string that contains at least one n</h4>";
$pattern = "/n+/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";

echo "<h4>Matches any string that contains a sequence of 3 n's</h4>";
$pattern = "/o{3}/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";


echo "<h4>Matches any string that contains a sequence of at least 2, but not more that 5 n's</h4>";
$pattern = "/e{2,5}/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";


echo "<h4>Matches any string that contains a sequence of at least 3 n's</h4>";
$pattern = "/o{3,}/";
echo preg_match_all($pattern, $txt);
echo preg_replace($pattern, "#", $txt);
echo "<br>";


echo "<br>";
echo "<h2>Grouping</h2>";
echo "<br>";

$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);

?>