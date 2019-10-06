<?php 
     $title = "If-Else Statements";
    include 'include/header.php' ?>
    <h1>If-Else Statements</h1>
    <?php
        // An if statement that will carry out an action based on the value of the variable
        echo '<h2>If Statement<h2>';
        $grade =30;

        if($grade >=50){
            echo '<h3 style="color:green">Eh, You Managed to Pass... This Time.</h3>';
        }
        else{
            echo '<h3 style="color:red">FALIURE!! Not surprised.</h3>';
        }
        $grade = 'C';
        // If Else If
        if($grade == 'A'){
            echo '<h2 style="color:green">You are worthy enough to level up.</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color:blue">You barely made it.</h2>';
        }
        else{
            echo '<h2 style="color:red">DISMISSED!!</h2>';
        }
    ?>    
<?php require 'include/footer.php' ?>