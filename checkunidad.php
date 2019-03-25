<html>
<body>

<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

$firstId=$_POST["entryFirstID"];
$block=$_POST["entryBlock"];
$apart=$_POST["entryApartment"];
$usr=$_POST["entryUsers"];
$idp=$_POST["entryID"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Property (entryFirstID,entryBlock,entryApartment,entryUsers,entryID)
VALUES ('$firstId','$block','$apart','$usr','$idp')";

if ($conn->query($sql) === TRUE) {
    echo "<script>location.replace('opcionesAdminSistema.html');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>