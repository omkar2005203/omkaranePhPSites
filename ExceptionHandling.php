<?php 
$title="Class";
include 'includes/header.php' 
?>
</br> 
<h1 class='text-primary'>Exception Handling</h1>
<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='ExceptionHandling.php';
show_source($fileName); // to show source code
?>

<?php

echo "<h3 class='text-primary' >Output:</h3>";

    $num=8;

    try{
        if($num>=10){
            echo "</br>";
            echo "$num is greater than 10";
        }
            
        else{
            throw new Exception("Enter Value greater than equal to 10");
        }

    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    finally{
        echo "</br>";
        echo "Runs everytime !";
       
    }


?>


<?php require 'includes/footer.php' ?>