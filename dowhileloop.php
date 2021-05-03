<?php 
$title="While loop";
include 'includes/header.php' ?>
<h1>While loop</h1>
    <?php

    $grade=0;

    do{
        echo"<p>This is less than 10</p>";
        $grade++;
    }while($grade<10)


    ?>

<?php require 'includes/footer.php' ?>