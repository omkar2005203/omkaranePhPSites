<?php 
//This file is made for auto-loading class demo
$title="House Class";

?>
</br> 
<h1 class='text-primary'>House Class</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='house.class.php';
show_source($fileName); // to show source code
?>

<?php

echo "<h3 class='text-primary' >Output:</h3>";
Class House{// class creation

    //properties and methods goes here

    private $window;
    private $door;
    private $room;

     //setter and getter methods goes here
    public function setWindow($newWindow){
        $this->window=$newWindow;
    }
    public function setDoor($newDoor){
        $this->door=$newDoor;
    }
    public function setRoom($newRoom){
        $this->room=$newRoom;
    }

    public function getWindow(){
        return $this->window;
    }

    public function getDoor(){
        return $this->door;
    }

    public function getRoom(){
        return $this->room;
    }

}


?>


