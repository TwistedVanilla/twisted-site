<?php
    function redirect($url) {
        header("Location: $url");
        die();
    }
        
    function processUserInputtedText($text) {
        $text = trim($text);
        $text = htmlspecialchars($text);
        return $text;
    }

    function printExceptionMessage($ex) {
        $message = $ex->getMessage();
        echo "<p>Uh oh - a pesky error has got through the cracks!</p>";
        echo "<p>More details on said pesky error: $message";
    }

    function getExistingUserDetails($username) {
        try {
            $db = new PDO("mysql:dbname=twisted_vanilla;host=localhost:8889;","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $rows = $db->query("SELECT * FROM User WHERE username='$username'");
            return $rows;
        }
        catch (PDOException $ex) {
            printExceptionMessage($ex);
        }
    }
        
    function usernameExists($username) {
                        
        $usernameExists = false;
        
        $rows = getExistingUserDetails($username);
        foreach ($rows as $row) {
            if (strcmp("$row", "$username") == 0) {
                $usernameExists = true;
            }
        }
             
        return $usernameExists;
    }
        
    function postNewUserDetails($username, $password) {
        try {
            $db = new PDO("mysql:dbname=twisted_vanilla;host=localhost:8889;","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec("INSERT INTO User (username, password) VALUES ('$username', '$password')");
            return true;
        }
        catch (PDOException $ex) {
            printExceptionMessage($ex);
        }
        return false;
    }

    

    function checkDetails($username, $password) {
        
        $rows = getExistingUserDetails($username);
        
        
        foreach ($rows as $row) {
            $validUsername = false;
            $validPassword = false;
            
            echo $row['username'];
            echo $row['password'];
            
            if (strcmp($row['username'], $username) == 0) {
                $validUsername = true;
                echo "ReachedUser";
            }
            
            if (strcmp($row['password'], $password) == 0) {
                $validPassword = true;
                echo "ReachedPassword";
            }
                
            if ($validUsername && $validPassword) {
                echo "Reached";
                return true;
            }
            
        }
        return false;
    }
?>