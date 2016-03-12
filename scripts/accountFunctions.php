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
            $db = new PDO("mysql:dbname=animal_sanctuary;host=localhost:8889;","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $rows = $db->query("SELECT * FROM User WHERE userID='$username'");
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
        
    function postNewUserDetails($username, $password, $staff) {
        try {
            $db = new PDO("mysql:dbname=animal_sanctuary;host=localhost:8889;","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec("INSERT INTO User (userID, staff, password) VALUES ('$username', '$staff', '$password')");
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
            
            if (strcmp($row['userID'], $username) == 0) {
                $validUsername = true;
            }
            
            if (strcmp($row['password'], $password) == 0) {
                $validPassword = true;
            }
                
            if ($validUsername && $validPassword) {
                return true;
            }
            
        }
        return false;
    }
?>