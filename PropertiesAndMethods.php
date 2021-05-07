<?php 
$title="Properties and Methods";
include 'includes/header.php' 
?>

</br> 
<h1 class='text-primary'>Properties and Methods</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='PropertiesAndMethods.php';
show_source($fileName);
?>

<?php
echo '</br> ';
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

  
}

$obj = new Person();
$obj->setName("Omkar"); // set name
echo $obj->name;

echo "<br/>";

$obj1 = new Person();
$obj1->setName("Nikhil"); // set name
echo $obj1->name;

echo "<br/>";

$obj2 = new Person();
$obj2->setName("Pratik"); // set name
echo $obj2->getName();  // get name

?>


<?php require 'includes/footer.php' ?>
