<?php 
     $title = "Date and Time Manipulation";
    include 'include/header.php' ?>
    <h1>Date and Time Manipulation</h1>

    <?php
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon']. "<br/>";
        echo $datenow['year']. "<br/><br/>";
        
        echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/'. $datenow['year']. '<br/>';
        echo time() . '<br/>';
        print date("m/d/y G.i:s<br>", time()) . '<br/>';
    ?>
<?php require 'include/footer.php' ?>