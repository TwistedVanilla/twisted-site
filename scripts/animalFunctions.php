<?php
    function get_animal_details($animalID) {
        try {
            $db = new PDO("mysql:dbname=animal_sanctuary;host=localhost:8889;","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $rows = $db->query("SELECT * FROM Animal WHERE animalID='$animalID'");
            
            return $rows;
        }
        catch (Exception $ex) {
            print_exception_message($ex);
        }
    }
?>