<?php
/*
PHP data types:
String - series of characters surrounded by quotes
Integer - Whole numbers
Float - Decimal numbers
Boolean - true or false
Array - Special variables, which can hold more than one value
Object - A class
NULL - Empty variables
Resource - Special variable that haolds a resource

Variable rules:
Variables must be prefixed with $
Variables must start with a letter or the underscore character
Variables can't start with a number
Variables can only contain alpha-numeric characters and underscores (A-Z, a-z, 0-9 and _)
Variables are case-sensitive $name and $NAME are two different variables
*/

$name = "Brad";
$age = 30;
$has_kids = true; // true: 1, flase = ''
$cash_on_hand = 20.75;

echo $name.'<br>';
echo $age.'<br>';
var_dump($has_kids); echo '<br>';
echo $cash_on_hand.'<br>';


echo $name . ' is '. $age .' years old.'.'<br>'; // with single quotes
echo "$name is $age years old".'<br>'; // with double quotes

$sum = '5' + '6'; // string numbers added with still give integer
var_dump($sum); echo '<br>';

// constants

define ('HOST','localhost');
define('DB_NAME','dev_db');

echo HOST.'<br>';

?>