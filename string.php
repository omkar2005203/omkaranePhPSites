<?php 
$title="String Manipulation";
include 'includes/header.php' ?>
<h1>String Manipulation</h1>

<?php
$phrase1="student who came late";
$phrase2="in class,stand with rock";

echo $phrase1;
echo "<br/>";
echo $phrase2;

echo "<br/>";

echo $phrase1.$phrase2;

echo "<br/>";

echo $phrase1. ",this is in between ," .$phrase2;

$name="omkar";
echo "<br/>";

echo 'upper case first letter: '. ucfirst($name) .'<br/>';

echo "<br/>";

echo 'Each Word : '. ucwords($name) .'<br/>';
echo 'Upper case : '. strtoupper($name) .'<br/>';
echo 'Upper case : '. strtolower($name) .'<br/>';
echo 'Repeat String: ' .str_repeat($name,10) .'<br/>';

echo 'Repeat String: ' .strtoupper(str_repeat($name,10)) .' <br/>';


echo 'Find Character : ' .strchr($name,'k').' <br/>';

echo 'Sub String : ' .substr($name,1,3).' <br/>';

echo 'length of string: '.strlen($name).'<br/>';

echo 'Trim spaces on both side : A '.trim(" B C D ").'</br>';
echo 'Trim spaces on both left side  : A '.ltrim(" B C D ").'</br>';
echo 'Trim spaces on both right side : A '.rtrim(" B C D ").'</br>';









?>
    
<?php require 'includes/footer.php' ?>