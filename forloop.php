<?php 
$title="For Loop";
include 'includes/header.php' ?>
</br> 
<h1 class='text-primary'>For Loop </h1>

<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='forloop.php';
show_source($fileName);
?>


<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
for($count=0;$count<20;$count++){
    echo "<p>Count : $count ->Hello World !</p>";
}
?>
    
<?php require 'includes/footer.php' ?>