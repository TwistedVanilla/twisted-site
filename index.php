<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $page_details = new PageDetails("Welcome");
            $page_details->setDefaultHead();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $page_details->createDefaultBodyTop();
        ?>
        <main>
            <h1>1.9 READY!!</h1>
            <p>The server is 1.9 ready to go! Hop on today: <em>mc.aarondrinksjava.com</em></p>
        </main>
        <section id="container">
            <section id="centre-container">
                <article id="left">
                    <h1>New custom and community made plugins available within the server!</h1>
                    <p>Twisted Vanilla is proud to announce new community made plugins which have been developed by Aston Computer Science Society (ACSS) Dev Team members!</p>
                    <p><em>Adam Woollen</em> and <em>Aaron Tello-Wharton</em> have been hard at work developing new experiences to enhance your experience within Minecraft. The plugin Bounty has already been a huge success within the server; looking to build upon this success, a Bailiff plugin to get players out of debt as well as a BombDefusal plugin which can diffuse TNT will be added to the server in due course.</p>
                    <p>It's an exciting time to be a Twisted Vanilla player. Stay tuned for more updates coming shortly! Click here to view a list of current plugins, as well as their source code.</p>
                </article>
                <article id="right">
                    <h1>BrumHack REPRESENT</h1>
                    <p>Well BrumHack is a piece of shit. But at least a load of Aston people turned up! :D
                </article>
            </div>
        </div>
        <?php
            $page_details->createDefaultBodyBottom();
        ?>
    </body>
</html>