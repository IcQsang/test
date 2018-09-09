<?php
include("conend/mysqlconend.php");

$sql = "SELECT * FROM poly";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "userid: " . $row["userid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " " . $row["id"]." " . $row["email"]." " . $row["size"]." " . $row["age"]." " . $row["gender"]. "<br>";
    }
} else {
    echo "0 results";
}

?>