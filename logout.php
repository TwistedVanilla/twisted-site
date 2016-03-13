<?php
    session_start();
    require_once 'scripts/sessionFunctions.php';
    closeLoginSession();
    redirect('index.php');
?>