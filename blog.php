<?php 
    session_start(); 
    require '../blog-api/bloggenerator.php';
    $blogGen = new BlogGenerator(new PDO("mysql:dbname=twisted_vanilla;host=localhost:8889;","root","root"));
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $page_details = new PageDetails("Twisted Blog");
            $page_details->setDefaultHead();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $page_details->createDefaultBodyTop();
        ?>
        <section class='$title_post'>
            <form method="post" action="<?php echo htmlspecialchars('$_SERVER[PHP_SELF]');?>">
                <label>Title: <input type='text' name='title' value='$this->title'/></label>
                <label>Description: <textArea name='description'>$this->description</textArea></label>");
                <label>Date Submitted: <input type='datetime' name='dateTime'/>$this->dateMade</label>
                <label class='err'>$this->error</label>
                <input type='submit'/>
                <input type='hidden' name='submitted' value='true'/>
            </form>
        </section>
        <?php 
            $blogGen->printEditPostSection();
            $blogGen->printCreatePostSection();
            $blogGen->printAllPosts();
            $blogGen->printMostRecentPostSection();
        ?>
        <?php
            $page_details->createDefaultBodyBottom();
        ?>
    </body>
</html>