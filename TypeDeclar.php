<?php 
//turning on strict mode '1' and '0' to disable it

declare(strict_types=1);

$title="Type Declarations";
include 'includes/header.php' 
?>
</br> 
</br> 
<h1 class='text-primary'>Type Declarations</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='TypeDeclar.php';
show_source($fileName); // to show source code

?>

<?php

/*
by using type declaration we can restrict type of data.
it works with class/interface/self,array,callable,bool,float,int,string,iterable,object.
*/

echo "<h3 class='text-primary' >Output:</h3>";
Class Person{// class creation

    //properties and methods goes here

    private $name;
    private $age;
    private $eyeColor;

     //setter and getter methods goes here
    public function setName(string $newName){
        $this->name=$newName;
    }
    public function setAge(int $newAge){
        $this->age=$newAge;
    }
    public function setEyeColor(string $newEyeColor){
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

    
$obj1 = new Person();  //creating  an object from Person namespace

$obj1->setName("Omkar"); // try putting value other than string you will get error9
echo $obj1->getName();

echo '<br/>';


?>


<?php require 'includes/footer.php' ?>