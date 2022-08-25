<?php
session_start();

$db = new mysqli("https://auth-db210.hstgr.io/index.php?route=/sql&server=1&db=u210807845_inteldb", "u210807845_u210807845_6qD", "dbMonarca2022", "u210807845_inteldb");

//echo mysqli_ping($db);

$resultados = mysqli_query($db, "SELECT * FROM usuarios WHERE Correo='$_POST[correo]' " );

$row = mysqli_fetch_array($resultados);

$mailingresado = $row['2'];


if ( isset($_POST['submit']) ){

	$correo = $_POST['correo'];

	if (!empty($correo)){

		if($correo == $mailingresado){
			$_SESSION['correousuario'] = $correo;
			header("location: index.php");
		} else {
			header("location: login.php");
		}

	} else {

		header("location: login.php");
	}

} else {
	header("location: login.php");
}
?>