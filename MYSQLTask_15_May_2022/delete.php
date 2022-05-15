<?php
include_once "connect.php";

$query = "DELETE FROM animal WHERE id ='5' ";

if (isset($_POST['delete'])) {
    mysqli_query($connection, $query);

}
