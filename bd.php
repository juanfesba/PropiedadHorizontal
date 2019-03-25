<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

$entryName=$_POST["entryName"];
$entryDate=array($_POST["entryDate"]['year'],$_POST["entryDate"]['month'],$_POST["entryDate"]['day']);
$entryTime=$_POST["entryTime"];
$entryLocation=$_POST["entryLocation"];
$user= $_POST["user"];
$entryDuration=$_POST["entryDuration"];
$flag=1;
$mydate=getdate(date("U"));

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM saveEntry";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	//echo substr($row["entryDuration"],5).' hora actual '.(string)date('H'). '      ';
    	if ($row["username"]==$user){
    		if ($row["entryDateanio"]>$mydate[year]){
               $flag=0;
    		}
    		elseif ($row["entryDateanio"]==$mydate[year]){
    			if ($row["entryDatemes"]+1>$mydate[mon]){
    				$flag=0;
    			}
    			elseif ($row["entryDatemes"]+1==$mydate[mon]){
    				if ($row["entryDatedia"]>=$mydate[mday]){
    					$flag=0;
    				}
    			}
    		}
        }
    }
}

if ($flag==1){
// Create connection


$sqlX = "INSERT INTO saveEntry (entryName,entryDateanio,entryDatemes,entryDatedia,entryTime,entryLocation,username,entryDuration)
VALUES ('$entryName','$entryDate[0]','$entryDate[1]','$entryDate[2]','$entryTime','$entryLocation','$user','$entryDuration')";

if ($conn->query($sqlX) === TRUE) {
    echo 'Se actualizo la base de datos';
} else {
    echo "Error: " . $sqlX . "<br>" . $conn->error;
}
}else {
     echo 'Ya tienes una reserva activa. Refresca la pagina';
}


$conn->close();
?>