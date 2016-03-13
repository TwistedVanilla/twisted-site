<?php
    require 'accountFunctions.php';

    function createLoginSession($username) {
        $_SESSION['username'] = $username;
    }

    function closeLoginSession() {
        session_unset();
        session_destroy();
    }
?>