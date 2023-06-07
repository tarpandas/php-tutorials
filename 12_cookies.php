<?php
/*
Cookies:

Cookies are a mechanism for storing data in the remote 
browser and thus tracking or identifying return users. You 
can set specific data to be stored in the browser, and 
then retieve it when the user visits the site again.
*/

// Set cookie

setcookie('name', 'Brad', time() + 86400 * 30);

// Read cookie

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// unset a cookie

// setcookie('name', '', time() - 36800 * 30);
?>