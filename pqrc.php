<html>
<body>

<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

$opt=$_POST["option"];
$uinput=$_POST["userinput"];
$idn=$_POST["custId"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO PQRC (idPQRC,type, custID)
VALUES ('$uinput','$opt','$idn')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.alert('Se envió correctamente');location.replace('opciones.html?data=" . $_POST["custId"] . "');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>

