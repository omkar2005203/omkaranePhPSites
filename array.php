<?php 
$title="Arrays";
include 'includes/header.php' 
?>
</br> 
<h1 class='text-primary'> Arrays</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='array.php';
show_source($fileName);
?>
    
<?php
    echo "<h3 class='text-primary'>Output:</h3>";
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

  