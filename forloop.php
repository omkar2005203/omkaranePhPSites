<?php 
$title="For Loop";
include 'includes/header.php' ?>
<h1>For Loop </h1>
<?php
for($count=0;$count<20;$count++){
    echo "<p>Count : $count ->Hello World !</p>";
}
?>
    
<?php require 'includes/footer.php' ?>