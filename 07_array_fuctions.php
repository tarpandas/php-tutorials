<?php
$fruits = ['apple', 'orange', 'pear'];

// get length

echo count($fruits); echo '<br>';

// search array

var_dump(in_array('apple',$fruits));

// add to an array

$fruits[] = 'grapes';
array_push($fruits, 'blueberry', 'strawberry'); // insert at the end
array_unshift($fruits, 'mango', 'banana'); // insert at the beginning 

print_r($fruits);  echo '<br>';

// remove for an array

array_pop($fruits); // remove one element from the end
array_shift($fruits); // remove one element from the front

print_r($fruits);  echo '<br>';

unset($fruits[2]); // remove one from an index

print_r($fruits);  echo '<br>';

// split it into chunks

$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);  echo '<br>';

// merge arrays

$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);

print_r($arr3);  echo '<br>';

$arr4 = [...$arr1, ...$arr2]; // spread

print_r($arr4);  echo '<br>';

// combine to make associative arrays

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

print_r($c); echo '<br>';

// get array keys

$keys = array_keys($c);

print_r($keys); echo '<br>';

// flip arrays

print_r(array_flip($c)); echo '<br>';

// range

$numbers = range(1,20);
print_r($numbers); echo '<br>';

// map

$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);

print_r($newNumbers); echo '<br>';

// filter

$lessThan10 = array_filter($numbers, function($number){ return $number <= 10;});

print_r($lessThan10); echo '<br>';

// reduce

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);

?>