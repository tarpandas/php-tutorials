<?php
    session_start();

    session_destroy();

    header('Location: /php-tutorial/13_sessions.php');
?>