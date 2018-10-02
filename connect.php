<!--Nehali Shah, 000770110-->
<?php 
try { 
            $dbh = new PDO('mysql:host=localhost;dbname=000770110', "000770110", "19991014");
            
        } 
        catch (Exception $e) 
        { 
            die("ERROR: Couldn't connect. {$e->getMessage()}");
        }
        
        ?>