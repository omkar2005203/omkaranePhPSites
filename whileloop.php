<?php 
$title="While loop";
include 'includes/header.php' 
?>
<h1 class='text-primary'>While loop</h1>
</br> 
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='whileloop.php';
show_source($fileName);
?>

<?php
echo "<h3 class='text-primary'>Output:</h3>";
    $grade=0;
    while($grade<10){
        echo"<p> grade is less than 10</p>";
        $grade+=1;
    }

?>


<?php require 'includes/footer.php' ?>
