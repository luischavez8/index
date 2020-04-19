<?php


require'denegar.php';
require'class/database.php';
$objData = new Database();



$sth = $objData->prepare('UPDATE usuarios set Estado = :Estado WHERE usuario = :usuario');

$Estado = "Perdido";
$usuario=$user;

$sth->bindParam(':Estado', $Estado);
$sth->bindParam(':usuario', $usuario);

$sth->execute();
header("Location:GPS.php");