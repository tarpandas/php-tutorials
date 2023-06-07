<?php
//  single line comment.

/*
    multiple lines comment.
*/

// echo - output strings, numbers, html, etc.

echo 123, 'Hello, 10.5', '<br>';

// print - Works like echo, but can only take in a single argument.

print 123; echo '<br>';

// print_r() - print single values and arrays.

print_r([1,2,3]); echo '<br>';

// var_dump() - returns more info like data type and length.

var_dump('Hello'); echo '<br>';

// var_export() - similar to var_dump(). Outputs a string representation of a variable.

var_export('Hello'); echo '<br>';
?>

<!doctype html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <?php echo 'Post One'; ?>
    </body>
</html>