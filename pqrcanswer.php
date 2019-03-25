<html>
<body>

<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

$idu=$_POST["IDResident"];
$uinput=$_POST["userinput"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Answ (idAnswer,IDUser)
VALUES ('$uinput','$idu')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.alert('Se envió correctamente');location.replace('opcionesadmin.html');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>

