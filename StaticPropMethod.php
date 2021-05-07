<?php

$title="Static Properties and Methods";
include 'includes/header.php' 
?>
</br> 
<h1 class='text-primary'>Static Properties and Methods</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='StaticPropMethod.php';
show_source($fileName);
?>
    
<?php
    echo "<h3 class='text-primary'>Output:</h3>";

    Class Person{

        //static properties can be called/accessed directly without creating objects by using class
        static $voteAge = 18;

        //static methods
        public static function setVotingAge($newVoteAge){
            self::$voteAge=$newVoteAge;
        }

        // we can acess static properties through non static function

        public function legalDrivingAge(){
            return self::$voteAge;
        }
    }

    $obj = new Person();

    echo Person ::$voteAge;
    echo'</br>';
    Person::setVotingAge(22);
    echo Person ::$voteAge;
    echo'</br>';
    echo $obj->legalDrivingAge();

?>

<?php require 'includes/footer.php' ?>

  