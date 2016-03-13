<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $page_details = new PageDetails("Plugins");
            $page_details->setDefaultHead();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $page_details->createDefaultBodyTop();
        ?>
                <main>
            <h1>Plugin Development</h1>
        </main>
        <?php
            $page_details->createDefaultBodyBottom();
        ?>
    </body>
</html>