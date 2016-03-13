<?php
        
    require 'scripts/sessionFunctions.php';
    session_start();
    
    $staff = false;
    if (empty($_SESSION['username'])) {
        redirect('index.php');
    }

    $usernameErr = "";
    $password1Err = "";
    $password2Err = "";
    $usernameExistsErr = "This username already exists - please try again!";
    $passwordMismatchErr = "Passwords do not match";
    $unenteredField = "Required field";
    $errorFound = false;

    $username = "";
        
    if (isset($_POST["submitted"])) {
        
        $username = process_user_inputted_text($_POST["username"]);
        $password1 = process_user_inputted_text($_POST["password1"]);
        $password2 = process_user_inputted_text($_POST["password2"]);
                
        if (!empty($username) && usernameExists($username)) {
            $errorFound = true;
            $usernameErr = "$usernameExistsErr";
        }
        else if (empty($username)) {
            $usernameErr = $unenteredField;
            $errorFound = true;
        }
                
        if (!empty($password1) && !empty($password2) && strcmp($password1, $password2) != 0) {
            $password2Err = $passwordMismatchErr;
            $errorFound = true;
        }
        else if (empty($password1)) {
            $password1Err = $unenteredField;
            $errorFound = true;
        }
        
        if ($errorFound == false) {
            if (postNewUserDetails($username, $password1)) {
                create_login_session($username);
                redirect("index.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once 'scripts/defaultPageFunctions.php';
            if ($staff) {
                $page_details = new PageDetails("Create Staff Account");
            }
            $page_details->setDefaultHead();
        ?>
    </head>
    <body>
        <?php 
            $page_details->createDefaultBodyTop();
        ?>
        
        <section>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label>Username: </label><input type="text" name="username" value="<?php echo "$username";?>"/>
                <label class="err"><?php echo "$usernameErr";?></label>
                <label>Password: </label><input type="password" name="password1"/>
                <label class="err"><?php echo "$password1Err";?></label>
                <label>Confirm Password: </label><input type="password" name="password2"/>
                <label class="err"><?php echo "$password2Err";?></label>
                <input type="submit"/>
                <input type="hidden" name="submitted" value="true"/>
            </form>
        </section>
        
        <?php
            $page_details->createDefaultBodyBottom();
        ?>
    </body>
</html>