<?php


include_once "connect.php";

$animalName = $_POST['up_name'];
$animalSound = $_POST['up_sound'];
$animalcolor = $_POST['up_color'];
$animalage = $_POST['up_age'];

$insertQuery = "UPDATE animal 
SET name ='$animalName', sound = '$animalSound', color = '$animalcolor' ,age = '$animalage' 
WHERE id = '3'";

if (isset($_POST['update'])) {
    echo "yes";

    mysqli_query($connection, $insertQuery);

}
