<html>
<body>

<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

$ctext=$_POST["uinput"];
$type=$_POST["option"];
$mydate=getdate(date("U"));
// Create connections
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//echo "$mydate[mday], $mydate[mon] $mydate[year]";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Feed (ctext,type,cday,cmonth,cyear)
VALUES ('$ctext','$type','$mydate[mday]','$mydate[mon]','$mydate[year]')";
//
if ($conn->query($sql) === TRUE) {
    echo "<script>window.alert('Entrada de Feed creada exitosamente');location.replace('opcionesAdmin.html');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>