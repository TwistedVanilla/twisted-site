<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $page_details = new PageDetails("");
            $page_details->set_default_head();
        ?>
    </head>
    <body>
        <?php
            $page_details->create_default_body_top();
        ?>
        <?php
            $page_details->create_default_body_bottom();
        ?>
    </body>
</html>