<?php

$loadfeed='';

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




$sql = "SELECT * FROM Feed";
$result = $conn->query($sql);
$count=0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$loadfeed=$loadfeed.'Entrada: '.$count.'
    	'.'Dia: '.$row["cday"].	'	  Mes: '.$row["cmonth"].'	 Año: '.$row["cyear"].'
    	'.$row["ctext"].'
    	
    	';
    	$count=$count+1;
    }
} else {
    $loadfeed= '0 results';
}
$conn->close();


echo '<!DOCTYPE html>
<html>
<title>Feed</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../lib/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
textarea {
    position: center;
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
* {
    box-sizing: border-box;
}
label {
  text-align: justify;
  display: block;
  margin: 0 auto;
  width: 50%;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}



/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}

</style>

<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-light-grey w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a onclick="window.location.href=',"'principal.html'",'"  class="w3-bar-item w3-button w3-padding-large w3-white">Principal</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">FAQ</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Info</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Administrador</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">FAQ</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Info</a>
  </div>
</div>

<!-- Header -->
<div class="w3-container w3-light-grey w3-center w3-padding-32">






</div>

<div class="w3-container w3-light-grey w3-center">
 <!-- AQUI SE ACTUALIZARIAAAAAA  -->
</div>

<header class="w3-container w3-pale-green w3-center" style="padding:30px 10px">
  <h2 class="w3-text-shadow w3-margin w3-xxxlarge">FEED</h2>

</header>


<!-- First Grid -->


<!-- Second Grid -->
<div class="w3-container w3-light-grey w3-center w3-padding-64" style="height:500px;">
  <form action="feedload.php" method="post">
  <textarea readonly
    id="uinput" name="uinput" placeholder="No hay publicaciones..." style ="width:60%" >',$loadfeed,'
  </textarea><p>
  </form>
  <button onclick="window.location.href=',"'opciones.html'",'" type="button" class="w3-button w3-black w3-padding-large w3-large" style ="width:20%">Atras</button><p>
</div>
<div class="w3-container w3-light-grey w3-center w3-padding-64">
</div>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>';
?>