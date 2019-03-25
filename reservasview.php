<?php
$servername = "50.62.209.41";
$username = "ingesoft";
$password = "Supermapu.123";
$dbname = "BD";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM saveEntry';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Lista de reservas</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Montserrat", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}
		.w3-bar,button {font-family: "Montserrat", sans-serif}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 25px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #ffd633;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #ffcc00;
			color: #FFFFFF;
			border-color: #e6b800 !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #ffe680;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		input[type=text], input[type=password] {
		    width: 50%;
		    padding: 12px 20px;
		    margin: 0 auto;
		    display: block;
		    margin-bottom:20px;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}

		button {
		    color: white;
		    padding: 14px 20px;
		    margin: 0 auto;
		    border: 4px;
		    margin-bottom:8px;
		    cursor: pointer;
		    display: block;
		    width: 50%;
		}

		button:hover {
		    opacity: 0.8;
		}
		.button3 {
				background-color: #000000;
				font-family: "Montserrat", sans-serif;
				font-size:15px;
		} /* Blue */
	</style>
</head>
<body>
	<h1>RESERVAS</h1>
	<p>
	<table class="data-table">
		<thead>
			<tr>
				<th>Nombre de la reserva</th>
				<th>Año</th>
				<th>Mes</th>
				<th>Día</th>
				<th>Momento de reserva</th>
				<th>Lugar</th>
				<th>Usuario</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= getdate();
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['entryName'].'</td>
					<td>'.$row['entryDateanio'].'</td>
					<td>'.$row['entryDatemes'].'</td>
					<td>'.$row['entryDatedia'].'</td>
					<td>'.$row['entryTime'].'</td>
					<td>'.$row['entryLocation'].'</td>
					<td>'.$row['username'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
	<div class="w3-container w3-white w3-center">
	<button onclick="window.location.href='opcionesAdmin.html'"" type="button" class="button3" style="width: 7%" background-color: #f44336;}>Atrás</button>
	</div>
</body>
</html>
