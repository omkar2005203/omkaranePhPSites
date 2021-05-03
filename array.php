<?php 
$title="Arrays";
include 'includes/header.php' 
?>
    
    <?php
    $num=3;

    $numbers = array(11,21,25,44,54,60,70,81,91,10);

    $size=count($numbers);

    echo "<p>size of array is : $size </p>";

    echo "Element at index : $numbers[6]";

    for($count=0;$count<$size;$count++){

        echo "<p>Array $count is : $numbers[$count]</p>";

    }

    ?>

<?php require 'includes/footer.php' ?>

  