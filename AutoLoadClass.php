<?php
//auto load class logic
include 'includes/autoloader.inc.php';
?>

<?php 
$title="Auto Load Classes";
include 'includes/header.php' ?>
</br class='text-primary'> 
<h1 class='text-primary'>Auto Load Classes</h1>

<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='AutoLoadClass.php';
show_source($fileName);
?>

<?php
echo "<h3 class='text-primary'>Output:</h3>";

$obj1 = new Person\Person();  //creating  an object from Person namespace
$obj2 = new House();

$obj1->setName("Omkar");
echo $obj1->getName();

echo '<br/>';

$obj2->setDoor(2);
echo $obj2->getDoor();


?>


<?php require 'includes/footer.php' ?>

