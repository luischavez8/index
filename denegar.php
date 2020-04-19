<?php
session_start();


if(isset($_SESSION ['u_usuario'])){

  
}else{
  header("Location:login.php");
}

$user=$_SESSION ['u_usuario'];
?>