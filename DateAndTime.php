<?php 
$title="Date and Time Manipulation";
include 'includes/header.php' ?>

<h1>Date and Time Manipulation</h1>

<?php
echo "<h3>Source Code:</h3>";
$fileName='DateAndTime.php';
show_source($fileName);
?>

<?php
echo "<h3>Output:</h3>";
$dateNow = getdate();
echo $dateNow['mday'].'</br>';
echo $dateNow['mon'].'</br>';
echo $dateNow['year'].'</br>';

echo "Today's date is : ".$dateNow['mday']."/".$dateNow['mon']."/".$dateNow['year']."<br/>";

$timestamp = time();
echo(date("F d, Y h:i:s", $timestamp));

?>

<?php require 'includes/footer.php' ?>