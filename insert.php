<!--Nehali Shah, 000770110-->
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$first_name = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_SPECIAL_CHARS);
$last_name = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_SPECIAL_CHARS);
$student_id = (int)filter_input(INPUT_POST, "student_id", FILTER_SANITIZE_SPECIAL_CHARS);
$online_assignment = (int)filter_input(INPUT_POST, "online_assignment", FILTER_SANITIZE_SPECIAL_CHARS);
$assignment_one = (int)filter_input(INPUT_POST, "assignment_one", FILTER_SANITIZE_SPECIAL_CHARS);
$assignment_two = (int)filter_input(INPUT_POST, "assignment_two", FILTER_SANITIZE_SPECIAL_CHARS);
$assignment_three = (int)filter_input(INPUT_POST, "assignment_three", FILTER_SANITIZE_SPECIAL_CHARS);
$php_exam = (int)filter_input(INPUT_POST, "php_exam", FILTER_SANITIZE_SPECIAL_CHARS);
$start_date= filter_input(INPUT_POST, "start_date", FILTER_SANITIZE_SPECIAL_CHARS);
$completion_date = filter_input(INPUT_POST, "completion_date", FILTER_SANITIZE_SPECIAL_CHARS);
$student_reflection = filter_input(INPUT_POST, "student_reflection", FILTER_SANITIZE_SPECIAL_CHARS);
include "connect.php";
        if( $first_name != NULL && $last_name != NULL && $student_id != NULL && $online_assignment != NULL && $assignment_one != NULL && $assignment_two != NULL && $assignment_three != NULL && $php_exam != NULL && $start_date != NULL && $completion_date != NULL && $student_reflection != NULL){

$command = "INSERT INTO `student_marks_nehali`(`first_name`, `last_name`, `student_id`, `online_assignment`, `assignment_one`, `assignment_two`, `assignment_three`, `php_exam`, `start_date`, `completion_date`, `student_reflation`)
         VALUES ('$first_name','$last_name',$student_id,$online_assignment,$assignment_one,$assignment_two,$assignment_three,$php_exam,'$start_date','$completion_date','$student_reflection')";
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
        <form action="insert.php" method="POST">
           First Name: <input type="text" name="first_name" value="" /><br>
           Last Name: <input type="text" name="last_name" value="" /><br>
           Student ID: <input type="text" name="student_id" value="" /><br>
           Online Assignment: <input type="text" name="online_assignment" value="" /><br>
           Assignment One: <input type="text" name="assignment_one" value="" /><br>
           Assignment Two: <input type="text" name="assignment_two" value="" /><br>
           Assignment Three: <input type="text" name="assignment_three" value="" /><br>
           Php Exam: <input type="text" name="php_exam" value="" /><br>
           Start Date: <input type="text" name="start_date" value="" /><br>
           Completion Date: <input type="text" name="completion_date" value="" /><br>
           Student Reflection: <input type="text" name="student_reflection" value="" /><br>
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
