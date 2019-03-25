<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM saveEntry";
$result = $conn->query($sql);
$ans="Array,";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$ans=$ans . $row["entryName"] . "," . $row["entryLocation"] . "," . $row["entryDatedia"] . "," . $row["entryDatemes"] . "," . $row["entryDateanio"] . "," . $row["entryDuration"] . ",";
    }
    echo $ans;
} else {
    echo $ans;
}



$conn->close();
?>