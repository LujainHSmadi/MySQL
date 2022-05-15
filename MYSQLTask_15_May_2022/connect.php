<?php
$connection = mysqli_connect('localhost', 'root', '', "animals");

//check the connection
if ($connection == false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());

}
