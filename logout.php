<?php
    require_once 'scripts/sessionFunctions.php';
    session_start();
    close_login_session();
    redirect('index.php');
?>