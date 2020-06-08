<?php

require("conexion.php");

	
	$query ="SELECT * from status";					// selecciona todo del tabla estatus
	$result = $conn->query($query);
	
		while($row = $result->fetch_assoc()) 
		{
			echo $row["status"];					// Echo data , equivalent with send data to esp
		}

?>