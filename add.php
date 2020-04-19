<?php

require'denegar_admin.php';
require'class/database.php';
$objData = new Database();

$sth=$objData->prepare('INSERT INTO usuarios values (:id, :nombre, :direccion, :telefono, :edad, :usuario, :password, :foto, :Estado)');

$id = '';
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$foto = "";
$Estado ="";

$sth->bindParam(':id', $id);
$sth->bindParam(':nombre', $nombre);
$sth->bindParam(':direccion', $direccion);
$sth->bindParam(':telefono', $telefono);
$sth->bindParam(':edad', $edad);
$sth->bindParam(':usuario', $usuario);
$sth->bindParam(':password', $password);
$sth->bindParam(':foto', $foto);
$sth->bindParam(':Estado', $Estado);

$sth->execute();

header('location: tabla.php');