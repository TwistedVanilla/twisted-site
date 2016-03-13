<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $pageDetails = new PageDetails("Blog Post Editor");
            $pageDetails->setDefaultHead();
        ?>
    </head>
    <body>
        <?php
            $pageDetails->createDefaultBodyTop();
        ?>
        <?php
            $pageDetails->createDefaultBodyBottom();
        ?>
    </body>
</html>