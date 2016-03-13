<?php 
    session_start(); 
    require_once '../blog-api/bloggenerator.php';
    $blogGen = new BlogGenerator(new PDO("mysql:dbname=animal_sanctuary;host=localhost:8889;","root","root"));
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $page_details = new PageDetails("Twisted Blog");
            $page_details->setDefaultHead();
        ?>
    </head>
    <body>
        <?php
            $page_details->createDefaultBodyTop();
        ?>
        <main>
            <h1>Twisted Vanilla Blog</h1>
        </main>
        <?php 
            $blogGen.printAllPosts();
        ?>
        <?php
            $page_details->createDefaultBodyBottom();
        ?>
    </body>
</html>