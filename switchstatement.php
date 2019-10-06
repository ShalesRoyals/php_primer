<?php 
     $title = "Switch Statements";
    include 'include/header.php' ?>
    <h1>Switch Statements</h1>
    <?php
           // Variable Declaration
           $grade = 'F';
           //Switch($variable) will scrutinuze the value of the variable against the cited cases. 
           switch($grade){
               case 'A':
                   echo '<h2 style="color: green">You are worthy enough to level up.</h2>';
                   break;
               case 'B':
                   echo '<h2 style="color: blue">You barely made it.</h2>';
                   break;
               default:
                   echo '<h2 style="color: red">DISMISSED!!</h2>';
                   break;
           }
    ?>
<?php require 'include/footer.php' ?>