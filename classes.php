<?php 
$title="Class";
include 'includes/header.php' 
?>
</br> 
<h1 class='text-primary'>Class</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='classes.php';
show_source($fileName); // to show source code
?>

<?php

echo "<h3 class='text-primary' >Output:</h3>";
Class NewClass{// class creation

    //properties and methods goes here

    public $info = "This is some info.";

}

//instantiating class or creating objects
$object = new NewClass;
var_dump($object); //The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s)

?>


<?php require 'includes/footer.php' ?>