<?php
    require_once 'scripts/sessionFunctions.php';
    session_start();
    closeLoginSession();
    redirect('index.php');
?>