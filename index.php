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
                    <p>It's an exciting time to be a Twisted Vanilla player. Stay tuned for more updates coming shortly! Click <u><a href="plugins.php">here</a></u> to view a list of current plugins, as well as their source code.</p>
                    <img src="images/12744701_1110636808967940_812136546015275135_n.jpg" alt="It's happening.aaron" height="150" width="300">
                </article>
                <article id="right">
                    <h1>Look at our dashing new website</h1>
                    <p>Over the course of 24 hours during a Hackathon known as BrumHack, a website for the server was created in an effort to collaborate all of our projects into one single site.</p>
                    <p><em>Hackathon</em> - an event in which computer programmers and others involved in software development and hardware development, including graphic designers, interface designers and project managers, collaborate intensively on software projects.</p>
                    <p>We hope to be updating this website with every update or new thing that is coming to the server, so keep an eye out for new content soon!</p>
                    <img
                    src="images/12790959_1225019594182886_8494807705975022354_n.jpg" alt="congrats" height="200" width="400">
                </article>
            </section>
        </section>
        <?php
            $page_details->createDefaultBodyBottom();
        ?>
    </body>
</html>