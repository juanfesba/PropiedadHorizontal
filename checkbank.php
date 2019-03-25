<html>
<body>

<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";


$resident=$_POST["IDResident"];
$payment=$_POST["IDPayment"];
$cname=$_POST["cardname"];
$doc=$_POST["iddoc"];
$cnumber=$_POST["cardnumber"];
$ccnumber = str_replace(' ', '', $cnumber);
$scode=$_POST["seccode"];
$cmon=$_POST["cmonth"];
$cyear=$_POST["cyear"];
$cuota=$_POST["cuotas"];
$pnumber=$_POST["phonenumber"];
$cfact=$_POST["fact"];
$information=$_POST["info"];
$ccity=$_POST["city"];
$ccountry=$_POST["country"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "INSERT INTO Payments (IDPayment, cardnumber,IDResident,iddoc,cardname,seccode,cmonth,cyear,cuotas,phonenumber,fact,info,city,country)
VALUES ('$payment','$ccnumber','$resident','$doc','$cname','$scode','$cmon','$cyear','$cuota','$pnumber','$cfact','$information','$ccity','$ccountry')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.alert('Se hizo el pago correctamente');location.replace('opciones.html?data=". $resident . "');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>

