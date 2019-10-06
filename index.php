     
 
<?php 
     $title = "Index";
    include 'include/header.php' ?>   
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>

<?php  
    //Printing to HTML Using echo
    echo "Hello PHP";
    echo "<br/>";
    echo "Second Line";
    echo "<br/>";

    //Create Variable
    $name = 'Iesha McNair';
    $age = '21';
    //echo variable
    echo $name;
    echo '<h1> My name is: '.$name. '</h1>';
    echo "<h1> My age is: ".$age. "</h1>";

    echo "<h1> My name is: $name </h1>";

?>

<button type="button" class="btn btn-dark"> CLICK ME!</button>
<button type="button" class="btn btn-primary"> CLICK ME!</button>
<button type="button" class="btn btn-success"> CLICK ME!</button>
<a href="https://www.heroku.com" target ="_blank" class="btn btn-danger">Heroku.com</a>
<?php require 'include/footer.php' ?>