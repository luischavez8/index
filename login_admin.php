  <?php 
  require'denegar_admin.php';
  require'class/database.php';
   $objData = new Database();

  
  session_start();
  $usuarioA=$_POST['usuarioA'];
  $passwordA=$_POST['passwordA'];
  
  $sth =$objData->prepare("SELECT * FROM administracion WHERE usuario='$usuarioA' AND password='$passwordA'");
  
$sth->execute();

$result = $sth->fetchAll();

  if($sth=$result){
  	$_SESSION['admin'] = $usuarioA;
  	
    header("Location:tabla.php");
  }
  else {
  	header("Location:administracion.php");
  	
  }
?>