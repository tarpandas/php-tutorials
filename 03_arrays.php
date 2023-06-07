<?php
// simple arrays

$numbers = [1,33,44,53,21];
$fruits = array('apple', 'orange', 'pears');

print_r($numbers);
echo '<br>';
var_dump($fruits);

echo $fruits[1].'<br>';

// associative array - we can define index

$colors = [
    1 => 'red',
    4 => 'yellow',
    9 => 'blue'
];
echo $colors[4].'<br>';

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '00f'
];
echo $hex['blue'].'<br>';

// multidimensional arrays

$people = [[
    'first_name' => 'fnameA',
    'last_name' => 'lnameA',
    'email' => 'fnameA@email.com'
],
[
    'first_name' => 'fnameB',
    'last_name' => 'lnameB',
    'email' => 'fnameB@email.com'
],
[
    'first_name' => 'fnameC',
    'last_name' => 'lnameC',
    'email' => 'fnameC@email.com'
]];

echo $people[1]['email'].'<br>';

// json encoding

var_dump(json_encode($people).'<br>');

// json_decode() is also existing
?>