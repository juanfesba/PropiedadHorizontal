<html>
<body>

<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

$idResident=$_POST["entryID"];
$room=$_POST["entryRoom"];
$usern=$_POST["entryUsern"];
$lastname=$_POST["entryLastName"];
$IDNumber=$_POST["entryIDNumber"];
$psw=$_POST["entryPsw"];
$type=$_POST["entryType"];
$phone=$_POST["entryPhone"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Users (intResident,room,name,lastname,nid,pass,type,phone)
VALUES ('$idResident','$room','$usern','$lastname','$IDNumber','$psw', '$type', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Se actualizó correctamente";
    echo "<script>location.replace('opcionesAdminSistema.html');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>