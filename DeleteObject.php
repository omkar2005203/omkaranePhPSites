<?php 
$title="Delete Objects";
include 'includes/header.php' 
?>
</br> 
<h1 class='text-primary'>Delete Objects</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='DeleteObject.php';
show_source($fileName); // to show source code
?>

<?php

echo "<h3 class='text-primary' >Output:</h3>";
Class NewClass{// class creation

    private $data;

    //properties and methods goes here
    public $info = "This is some info.";

    public function __contruct(){
        echo "This class has been instantiated <br>";
    }

    public function setNewProperty($newData){
        $this->data= $newData;
    }

    public function getNewProperty(){
        return $this->data;
    }

    public function __destruct(){
        echo "This is end of class<br>";
    }

}

//instantiating class or creating objects
$object = new NewClass();
//unset($object); //destroying or deleting object
$object->setNewProperty(23);
echo $object->getNewProperty();
echo '</br>';



?>


<?php require 'includes/footer.php' ?>