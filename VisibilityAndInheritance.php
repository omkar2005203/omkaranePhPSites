<?php 
$title="Class";
include 'includes/header.php' 
?>
</br> 
<h1>Class</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='VisibilityAndInheritance.php';
show_source($fileName);
?>

<?php
echo '</br> ';
echo "<h3 class='text-primary'>Output:</h3>";

class Person{

    // private can be accessed within the class
    protected $first="Omkar"; //can be accessed in other extended class or same class
    private $last="Rane";
    private $age="22";

    public function owner(){ // public can be accessed anywhere (this is a method)
        $a="Hello World !";
        $b=$this->first; //$this points current class
        return $b;
    }
}

class Pet extends Person{ // 'extends' keyword is used for inherting properties and methods from parent class i.e Person

    public function owner(){
        $b=$this->first;
        return $b;
    }
}

$obj = new Pet();
$obj1= new Person(); 
echo $obj->owner();

?>


<?php require 'includes/footer.php' ?>
