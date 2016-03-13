<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            $page_details = new PageDetails("Welcome");
            $page_details->setDefaultHead();
        ?>
    </head>
    <body>
        <?php
            $page_details->createDefaultBodyTop();
        ?>
        <main>
            <h1>Adopt Today!</h1>
            <p>Adopting an animal is one of the best things you can do! Whether it be a rabbit, dog or gerbil, you will never regret adopting an animal!</p>
        </main>
        <article>
            <h1>20 Animals Being Kept in Aston University Accommodation</h1>
            <p>Aston University Security were called to an apartment on the 30th December because of complaints of loud noise. To their upmost surprise, they discovered 30 gerbils living underneath the students bed. </p>
            <p>The security services had this to say: <em>"We were deeply saddened to discover this many animals being kept inhumanely in horrific conditions. We have transferred the animals to the <strong>Aston Animal Sanctuary</strong> who will take good care of them from now on. The student in question is in custody."</em></p>
            <p>The Aston Animal Sanctuary were happy to look after the animals - <strong>who are now available for adoption.</strong></p>
        </article>
        <article>
            <h1>Dogs who play Call of Duty become addicted to meat!</h1>
            <p>Recent research conducted by the University of Birmingham has proven that the popular video game Call of Duty causes dogs to become addicted to eating meat of all kinds.</p>
            <p>The report states that: <em>"100% of the dogs who played the game also ate the meat that we provided. Therefore, we see a direct correlation between meat eating dogs and those who play COD."</em></p>
            <p>We are happy to report that none of the dogs at the Aston Animal Sanctuary are playing the Call of Duty franchise.</p>
        </article>
        <aside>
            <ul>Opportunities Here!</h1>
            <p>Login</p>
            <p>View All Animals</p>
        </aside>
        <?php
            $page_details->createDefaultBodyBottom();
        ?>
    </body>
</html>