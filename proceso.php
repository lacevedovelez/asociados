<?php

$conexion = mysqli_connect("localhost","root","luiang78","db_asociados");

	$cedula = $_POST["cedula"];

	$sel = "SELECT * FROM asociados WHERE Cedula='$cedula'";

	$ejecutar = mysqli_query($conexion,$sel);

	$chequear_cedula = mysqli_num_rows($ejecutar);

	$row = $ejecutar->fetch_array(MYSQLI_ASSOC);

	if($chequear_cedula == 0){
		echo "<h2>La cedula no se encuentra registrada en la base de asociados</h2>";
		exit;
	} else {
		echo "<h2>El asociado con cedula ".$row["Cedula"]." y nombre ".$row["Nombre"]." se encuentra registrado en la base de datos de asociados y tiene esta observación: ".$row["Observacion"]."</h2>";
		exit;
	}

?>