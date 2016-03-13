<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $pageDetails = new PageDetails("About");
            $pageDetails->setDefaultHead();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $pageDetails->createDefaultBodyTop();
        ?>
                <main>
            <h1>About</h1>
        </main>
        <section id="container">
            <section id="centre-container">
                <article id="left">
                    <h1>Who are we?</h1>
                    <p>We are a group of developers who love Minecraft and look forward to making new and exciting things for it!</p>
                </article>
                <article id="right">
                    <h1>Copyright Information</h1>
                    <p>This website has been developed by Elisabeth Long and George King and may not be copied in any way.
                </article>
            </section>
        </section>
        <?php
            $pageDetails->createDefaultBodyBottom();
        ?>
    </body>
</html>