<html>
<body>

<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

$iduser=(int)$_POST["jsuser"];
$idday=$_POST["jsday"];
$idmonth=$_POST["jsmonth"];
$idyear=$_POST["jsyear"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "DELETE FROM saveEntry WHERE (username = $iduser AND entryDatedia = $idday AND entryDatemes = $idmonth AND entryDateanio = $idyear)";

$sql = "DELETE FROM saveEntry WHERE (entryDatemes=$idmonth AND entryDatedia=$idday AND entryDateanio=$idyear AND username=$iduser)";

if ($conn->query($sql) === TRUE) {
	echo "Refresque la pagina";
} else {
    echo "Error deleting record: " . $conn->error;
}

/*$sql = "SELECT * FROM Users WHERE name=$iduser";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if ($row['name']==$iduser){
			echo 'sirve';
    	}
    }
} else {
    echo "Error" . $conn->error;
}*/

$conn->close();
?>


</body>
</html>