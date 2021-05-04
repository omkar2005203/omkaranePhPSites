<?php
$title="User Defined Functions";
include 'includes/header.php' ?>
<h1>User Defined Functions</h1>

<?php
echo "<h3>Source Code:</h3>";
$fileName='UserDefFunctions.php';
show_source($fileName);
?>


    <?php
    echo "<h3>Output:</h3>";

    /* Defining function */

    function writeMessage(){
        echo "This is inside function <br/>";
        echo "This is inside function <br/>";
    }

    // function call

    writeMessage();
    echo"<hr/>";

    function addFunction($num1,$num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is $sum <br/>";

    }

    addFunction(10,20);

    function returnProduct($num1,$num2){
        return $num1 * $num2;
    }

    echo 'Product is :'.returnProduct(10,20);
    
    ?>


<?php require 'includes/footer.php' ?>