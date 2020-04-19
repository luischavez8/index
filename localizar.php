<?php


require'denegar.php';
require'class/database.php';
$objData = new Database();



$sth = $objData->prepare('UPDATE usuarios set Estado = :Estado WHERE id = :id');

$id=$_REQUEST['id'];
$Estado = "Localizado";

$sth->bindParam(':id', $id);
$sth->bindParam(':Estado', $Estado);


$sth->execute();
header("Location:tabla.php");