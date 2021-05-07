<?php 
$title="Constructor And Destructor";
include 'includes/header.php' 
?>
</br> 
<h1 class='text-primary'>Constructor and Destructor</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='ConstAndDest.php';
show_source($fileName);
?>
    
<?php
    echo "<h3 class='text-primary'>Output:</h3>";

    class Person{

        //properties
        public $name;
        public $eyeColor;
        public $age;

        // setter methods
        public function setName($newName){ // setter method
            $this->name = $newName;
        }
    
        public function seteyeColor($newEyeColor){ // setter method
        $this->eyeColor = $newEyeColor;
        }
    
    
        public function setAge($newAge){ // setter method
            $this->age = $newAge;
            }
        
    
        public function getName(){ // getter method
            return $this->name;
        }
    
        public function getEyeColor(){ // getter method
            return $this->eyeColor;
        }
    
        public function getAge(){ // getter method
            return $this->age;
        }

        function __construct($NewName,$NewEyeColor,$NewAge){ // constructor defination
            echo "Constructor called !";
            $this->name = $NewName;
            $this->eyeColor=$NewEyeColor;
            $this->age=$NewAge;
        }

        function __destruct(){//destructor is used for destroying objects
            echo "Destructor called !";
          
          }

    }
    $obj = new Person("Omkar","Black",22); // setting values in cosntructor

    //comment below for checking destructor code
    echo '<br/>';
    echo $obj->name;
    echo '<br/>';
    echo $obj->eyeColor;
    echo '<br/>';
    echo $obj->age;

    echo '<br/>';
    $obj->setName("Nikhil");
    echo $obj->name;
    echo '<br/>';
    echo $obj->getName();



?>

<?php require 'includes/footer.php' ?>

  