<?php
    require 'accountFunctions.php';

    function create_login_session($username) {
        $_SESSION['username'] = $username;
        $rows = getExistingUserDetails($username);
        foreach ($rows as $row) {
            $_SESSION['isStaff'] = $row['staff'];
        }
    }

    function close_login_session() {
        session_unset();
        session_destroy();
    }
?>