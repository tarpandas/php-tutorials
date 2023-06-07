<?php
/*
Exceptions:

PHP has an exception model similar to that of other programming languages.
An exception can be thrown, and caught within PHP. Code may be surrounded in a
try block, to facilitate the catching of potential exceptions.
Each try must have atleast one corresponding catch and finally block.
*/

function inverse($x) {
    if(!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(10);
    echo inverse(0);
} catch (Exception $e) {
    echo 'Caught Exception', $e->getMessage(), '<br>';
} finally {
    echo 'Finally block', '<br>';
}

echo 'Hello World!', '<br>';
?>