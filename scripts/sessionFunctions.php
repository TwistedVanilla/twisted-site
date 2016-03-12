<!-- Author: Elisabeth Long -->
<?php
    require 'accountFunctions.php';

    function createLoginSession($username) {
        $_SESSION['username'] = $username;
        $rows = getExistingUserDetails($username);
        foreach ($rows as $row) {
            $_SESSION['isStaff'] = $row['staff'];
        }
    }

    function closeLoginSession() {
        session_unset();
        session_destroy();
    }
?>