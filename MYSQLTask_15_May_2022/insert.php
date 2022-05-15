<?php
include_once "connect.php";

$animalName = $_POST['name'];
$animalSound = $_POST['sound'];
$animalcolor = $_POST['color'];
$animalage = $_POST['age'];


$insertQuery = "INSERT INTO animal (name,sound,color,age)
 VALUES ('$animalName','$animalSound','$animalcolor','$animalage')";
echo '<pre>';
var_dump($connection);
echo '</pre>';

if (isset($_POST['add'])) {
    echo "yes";

    mysqli_query($connection, $insertQuery);

}
