<?php

include_once "connect.php";

$query = "SELECT id, name, sound, color, age 
FROM animal";

$result = mysqli_query($connection, $query);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table>";
echo "<tr><th>Id</th><th>Animal name</th><th>Sound</th><th>color</th><th>age</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $row['id']."</td><td>".$row["name"]."</td><td>".$row["sound"]."</td><td>".$row["color"]."</td><td>".$row["age"]."</td></tr>";

    }
    echo "</table>";

} else {
    echo "0 results";
}


