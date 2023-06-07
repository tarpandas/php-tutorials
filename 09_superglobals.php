<?php
// Superglobals are built in variable that are always available in all scopes.
/*
$_GET - contains information about variables passed through a URL or a form.
$_POST - contains information about variables passed through a form.
$_COOKIE - contains information about variables passed through a cookie.
$_SESSION - contains information about variables passed through a session.
$_SERVER - contains information about the server environment.
$_ENV - contains information abut the environment variables.
$_FILES - contains information about the files uploaded to the script.
$_REQUEST - contains information ablout the variables passed through the form or URL.
*/

echo 'Host: '.$_SERVER['HTTP_HOST'].'<br>';
echo 'Server name: '.$_SERVER['SERVER_NAME'].'<br>';
echo 'Server port: '.$_SERVER['SERVER_PORT'].'<br>';
echo 'Current directory and filename: '.$_SERVER['PHP_SELF'].'<br>';
echo 'Current browser: '.$_SERVER['HTTP_USER_AGENT'].'<br>';
echo 'Request URI: '.$_SERVER['REQUEST_URI'].'<br>';
echo 'Server Software: '.$_SERVER['SERVER_SOFTWARE'].'<br>';
echo 'Remote address: '.$_SERVER['REMOTE_ADDR'].'<br>';
echo 'Remote port: '.$_SERVER['REMOTE_PORT'].'<br>';

// var_dump($_SERVER); // gives all the information on server.
?>