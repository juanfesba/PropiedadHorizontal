<html>
<body>

<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

$idResident=$_POST["entryID"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM Users WHERE intResident = $idResident";

if ($conn->query($sql) === TRUE) {
	echo "<script>location.replace('opcionesAdminSistema.html');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>