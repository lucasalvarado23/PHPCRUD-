<?php

include ("connection.php");

$idUser = $_GET["id"];

$consulta = "DELETE  FROM Name WHERE idUser='$idUser'";

$ejecutar_consulta = $connection->query($consulta);



header("location: success.php");


