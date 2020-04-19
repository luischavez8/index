<?php

//nos conectamos a la BD
require'denegar.php';
require'class/database.php';
$objData = new Database();

//print_r($_POST);

$sth = $objData->prepare('UPDATE usuarios set nombre = :nombre, direccion = :direccion, telefono = :telefono, edad = :edad, password = :password, foto = :foto, usuario=:usuario WHERE usuario = :usuario');

$id = "";
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$password = $_POST['password'];
$foto = "";
$usuario = $user;

$sth->bindParam(':id', $id);
$sth->bindParam(':nombre', $nombre);
$sth->bindParam(':direccion', $direccion);
$sth->bindParam(':telefono', $telefono);
$sth->bindParam(':edad', $edad);
$sth->bindParam(':password', $password);
$sth->bindParam(':foto', $foto);
$sth->bindParam(':usuario', $usuario);


$sth->execute();
header("Location:Registro.php");