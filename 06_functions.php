<?php
function registerUser($isRegistered) {
    if($isRegistered)
        echo 'User registered';
    else
        echo 'Not registered';
}

$x = true;
registerUser($x);
?>