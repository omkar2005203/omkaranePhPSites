<?php 
namespace Person; // creating namespace
//This file is made for auto-loading class demo
$title="Person Class";

?>
</br> 
<h1 class='text-primary'>Person Class</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='person.class.php';
show_source($fileName); // to show source code
?>

<?php

echo "<h3 class='text-primary' >Output:</h3>";
Class Person{// class creation

    //properties and methods goes here

    private $name;
    private $age;
    private $eyeColor;

     //setter and getter methods goes here
    public function setName($newName){
        $this->name=$newName;
    }
    public function setAge($newAge){
        $this->age=$newAge;
    }
    public function setEyeColor($newEyeColor){
        $this->eyeColor=$newEyeColor;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getEyeColor(){
        return $this->eyeColor;
    }

}


?>


