<?php

include ("connection.php");

$name = $_GET["name"];
$email = $_GET["email"];
$phoneNumber = $_GET["phoneNumber"];
$id = $_GET["id"];

$sql = "UPDATE `Name` SET `name` = '$name', `email` = '$email', `phoneNumber` = '$phoneNumber' WHERE `Name`.`idUser` = $id;";

$ejecutar_consulta = $connection->query($sql) or die ("No");

header("location: success.php");
