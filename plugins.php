<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $page_details = new PageDetails("Plugins");
            $page_details->setDefaultHead();
        ?>
    </head>
    <body>
        <?php
            $page_details->createDefaultBodyTop();
        ?>
        <?php
            $page_details->createDefaultBodyBottom();
        ?>
    </body>
</html>