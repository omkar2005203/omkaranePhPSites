<?php 
$title="First Program";
include 'includes/header.php' ?>
<?php
     echo "Hello World!";
     echo"inside php tag";
     echo"<br/>";
     echo"second line";

    ?>

    <?php
    $name="Omkar";
    $age=21;
    echo $name;
    echo '<h1> My Name is:'.$name.'</h1>';
    echo '<h1>My age is :'.$age.'</h1>';
    ?>
    
    <?php require 'includes/footer.php' ?>