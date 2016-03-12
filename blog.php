<?php 
    session_start(); 
    require_once 'https://github.com/TwistedVanilla/blog-api/bloggenerator.php';
    $blogGen = new BlogGenerator(new PDO());
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $page_details = new PageDetails("Twisted Blog");
            $page_details->set_default_head();
        ?>
    </head>
    <body>
        <?php
            $page_details->create_default_body_top();
        ?>
        <main>
            <h1>Twisted Vanilla Blog</h1>
        </main>
        <?php 
            
        ?>
        <?php
            $page_details->create_default_body_bottom();
        ?>
    </body>
</html>