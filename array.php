<?php 
     $title = "Arrays";
    include 'include/header.php' ?>
    <h1>Arrays</h1>
    <?php
        //a variables
        $num = 3;
        //an array
        //only one datatype in this array
        $numbers = array(1,2,3,4,5,6,7,8,9,10,23,56,77,90);
        //You can access the value in as subscript of the array using the index
        echo $numbers[5];

        echo"<p>$numbers[9]<p/p>";
        $size= count($numbers);

        echo "<p>Array Number is size: $size</P>";

        for($count = 0; $count< $size; $count ++){
            echo "<p>$numbers[$count]</p>";
        }

    ?>
<?php require 'include/footer.php' ?></body>
</html>