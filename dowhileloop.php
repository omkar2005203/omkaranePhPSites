<?php 
$title="While loop";
include 'includes/header.php' ?>
</br> 
<h1 class='text-primary'>While loop</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='dowhileloop.php';
show_source($fileName);
?>

<?php
echo "<h3 class='text-primary'>Output:</h3>";
    $grade=0;

    do{
        echo"<p>This is less than 10</p>";
        $grade++;
    }while($grade<10)

?>

<?php require 'includes/footer.php' ?>