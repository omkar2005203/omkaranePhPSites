<?php 
$title="First Program";
include 'includes/header.php' ?>

<?php
echo "<h3>Source Code:</h3>";
$fileName='HelloWorld.php';
show_source($fileName);
?>
<?php
echo "<h3>Output :</h3>";
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
    echo '<h2>My age is :'.$age.'</h2>';
    ?>
  
    <?php require 'includes/footer.php' ?>