<?php 
$title="Date and Time Manipulation";
include 'includes/header.php' ?>
</br class='text-primary'> 
<h1 class='text-primary'>Date and Time Manipulation</h1>

<?php
echo "<h3 class='text-primary'>Source Code:</h3>";
$fileName='DateAndTime.php';
show_source($fileName);
?>

<?php
echo "<h3 class='text-primary'>Output:</h3>";
$dateNow = getdate();
echo $dateNow['mday'].'</br>';
echo $dateNow['mon'].'</br>';
echo $dateNow['year'].'</br>';

echo "Today's date is : ".$dateNow['mday']."/".$dateNow['mon']."/".$dateNow['year']."<br/>";

$timestamp = time();
echo(date("F d, Y h:i:s", $timestamp));

?>

<?php require 'includes/footer.php' ?>