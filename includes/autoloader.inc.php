<?php
//auto load class logic
spl_autoload_register('myAutoLoader'); // passing function name as string

//function for getting path for required class
function myAutoLoader($className){
$path = "classes/";
$extension=".class.php";
$fullpath=$path.$className.$extension;


if(! file_exists($fullpath)){//path check
    return false;
}

include_once $fullpath;
}

?>