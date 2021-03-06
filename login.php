<?php
    session_start();
    require 'scripts/sessionFunctions.php';

    $formErr = "";
    $unenteredUsernameField = "Please enter a username.";        
    $unenteredPasswordField = "Please enter a password.";
    $invalidLoginDetails = 'The login details you have provided are invalid.';
    $errorFound = false;
        
    $username = "";
    $password = "";
        
    if (isset($_POST["submitted"])) {
        $username = processUserInputtedText($_POST["username"]);
        $password = processUserInputtedText($_POST["password"]);
        
        if (empty($password)) {
            $formErr = $unenteredPasswordField;            
            $errorFound = true;
        }
                
        if (empty($username)) {
            $formErr = $unenteredUsernameField;
            $errorFound = true;
        }
                
        if ($errorFound == false) {
            if (checkDetails($username, $password) == true) {
                createLoginSession($username);
                redirect("index.php");
            }
            else {
                $formErr = $invalidLoginDetails;
            }
        }
    }


    require_once 'scripts/defaultPageFunctions.php';
    $pageDetails = new PageDetails("Login");
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $pageDetails->setDefaultHead();
        ?>
    </head>
    <body>
        <?php
            $pageDetails->createDefaultBodyTop();
        ?>
        <section>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label>Username: <input type="text" name="username" value="<?php echo "$username";?>"/></label>
                <label>Password: <input type="password" name="password"/></label>
                <label class="err"><?php echo "$formErr";?></label>
                <input type="submit"/>
                <input type="hidden" name="submitted" value="true"/>
            </form>
        </section>
        <?php
            $pageDetails->createDefaultBodyBottom();
        ?>
    </body>
</html>