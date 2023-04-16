<?php
	$nombre_temporal = $_FILES['archivo']['tmp_name'];
	$nombre = $_FILES['archivo']['name'];
	move_uploaded_file($nombre_temporal, 'archivos/'.$nombre);

	function rutaImagen(){
		$nombre_temporal = $_FILES['archivo']['tmp_name'];
		$nombre = $_FILES['archivo']['name'];
		$ruta = "../subirArchivo/archivos".$nombre;
		return $ruta;
	}
?>