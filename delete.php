<!--Nehali Shah, 000770110-->
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$student_id = (int)filter_input(INPUT_POST, "student_id", FILTER_SANITIZE_SPECIAL_CHARS);

include "connect.php";
        if( $student_id != NULL){

$command = "DELETE FROM `student_marks_nehali` WHERE  `student_id` = $student_id;";
        $stmt = $dbh->prepare($command); 
        
        
        $success = $stmt->execute(); 
        
        if ($success) { 
            echo "<p>Win!</p>"; echo "<p>{$stmt->rowCount()}rows were affected by your  query.</p>"; 
            
            } else { 
                echo "<p>Fail...</p>"; 
                
            } 
        }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="delete.php" method="POST">

           Student ID: <input type="text" name="student_id" value="" /><br>
           <input type="submit" value="Submit" />
           
        </form>
        <?php

        if (isset($success)) { 
            echo "<p>Win!</p>"; echo "<p>{$stmt->rowCount()}rows were affected by your  query.</p>"; 
            
            } else { 
                echo "<p>Fail...</p>"; 
                
            } 
        ?>
        <a href="index.html">index</a>
    </body>
</html> 

