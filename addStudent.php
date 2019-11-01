<?php

	$connection = new mysqli('localhost','root','','students') or die ("no conectado");

	$name = addslashes(utf8_decode($_POST["name"]));

	$email = addslashes($_POST["email"]);

	$phoneNumber = addslashes($_POST["phoneNumber"]);



	$busqueda= "INSERT INTO `Name` (`idUser`, `name`, `email`, `phoneNumber`) VALUES (NULL, '$name', '$email', '$phoneNumber');";

	$ejecutar_consulta = $connection->query($busqueda) or die ("No");

	 header("location: success.php");

	 