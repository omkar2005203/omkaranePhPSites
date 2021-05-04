<?php 
$title="if statement";
include 'includes/header.php' ?>

<h1>if-else and elif Statement</h1>
<?php
echo "<h3>Source Code:</h3>";
$fileName='ifstatement.php';
show_source($fileName);
?>
    <?php
    echo '<h3>Output: </h3>';
    echo '<h2>if statement</h2>';

    $grade=90;

    if($grade>=50){
        echo '<h3 style="color:green">You have passed</h3>';

    }
    else{
        echo '<h3 style="color:red">You have failed</h3>';
    }

    $grade='A';

    if($grade=='A' || $grade=='A+'){
        echo '<h3>You are super star !</h3>';
    }
    elseif($grade=='B'){
        echo '<h3 style="color:blue>You did well  !</h3>';

    }
    else{
        echo '<h3 style="color:red>You need to improve !</h3>';
    }


    ?>

<?php require 'includes/footer.php' ?>