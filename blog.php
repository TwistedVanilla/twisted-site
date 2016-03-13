<?php 
    session_start(); 
    require '../blog-api/bloggenerator.php';
    $blogGen = new BlogGenerator(new PDO("mysql:dbname=twisted_vanilla;host=localhost:8889;","root","root"));
    $blogGen->validateCreatePostSection();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $pageDetails = new PageDetails("Twisted Blog");
            $pageDetails->setDefaultHead();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $pageDetails->createDefaultBodyTop();
        ?>
        <?php 
            $blogGen->printEditPostSection();
            $blogGen->printCreatePostSection();
        ?>
        <?php
            $pageDetails->createDefaultBodyBottom();
        ?>
    </body>
</html>