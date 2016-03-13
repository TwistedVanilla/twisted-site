<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $pageDetails = new PageDetails("Plugins");
            $pageDetails->setDefaultHead();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $pageDetails->createDefaultBodyTop();
        ?>
                <main>
            <h1>Plugin Development</h1>
        </main>
        <section id="container">
            <section id="centre-container">
                <article id="left">
                    <h1>Bounty</h1>
                    <p>Bounty is an amazing plugin developed by our Dev Team which incorporates the Bukkit API as well as the Essentials economy to create a virtual 'bounty' on a player if they kill another player or place TNT.</p>
                    <p>This was developed to prevent griefers upon the server from attacking and killing other people or destroying their land. </p>
                    <p>This plugin is open-source and the link to downloading the source code can be found <u><a href="https://github.com/Adzwoolly/Bounty">here</a></u>.</p>
                        <img src="images/12837267_1107286079322881_157226735_o.jpg" alt="Bounty" height="100" width="350">
                </article>
                <article id="right">
                    <h1>BombDefusal</h1>
                    <p>BombDefusal is a plugin which creates a mini game within the server out of TNT. It works by giving TNT a timer as to when it can explode, giving the user the option of difusing it within that timer. This can be difused through mini games.</p>
                    <p>We feel like this will give users a reason as to why to want TNT, as well as providing users with fun on the server.</p>
                    <p>This plugin is also open source and can be found <u><a href="https://github.com/Adzwoolly/BombDefusal">here</a></u>.</p>
                        <img
                    src="images/12499577_1107286082656214_535441797_o.jpg" alt="BombDefusal" height="150" width="400">
                </article>
            </section>
        </section>
        <?php
            $pageDetails->createDefaultBodyBottom();
        ?>
    </body>
</html>