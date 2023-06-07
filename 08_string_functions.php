<?php
$string = 'Hello World!';


echo strlen($string); echo '<br>'; // postiton of first occurence
echo strpos($string, 'o'); echo '<br>'; // postiton of first occurence
echo strrpos($string, 'o'); echo '<br>'; // postiton of last occurence
echo strrev($string); echo '<br>'; // reverse string
echo strtolower($string); echo '<br>'; // lowercasing
echo strtoupper($string); echo '<br>'; // uppercasing
echo ucwords($string); echo '<br>'; // uppercase first character of words
echo substr($string, 0, 5);  echo '<br>'; // substring
if(str_starts_with($string, 'Hello')) { // check starting string
    echo 'YES'.'<br>';
}
if(str_ends_with($string, 'World!')) { // check ending string
    echo 'YES'.'<br>';
}
$string2 = '<script>alert(1)</script>';
echo  htmlspecialchars($string2); // converts to html string
printf('<br>%s<br>',$string); // formating strings like C programming language.
?>