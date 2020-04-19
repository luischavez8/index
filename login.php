  <?php 
  require'denegar.php';
  require'class/database.php';
   $objData = new Database();

  
  session_start();
  $usuario=$_POST['usuario'];
  $password=$_POST['password'];
  
  $sth =$objData->prepare("SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'");
  
$sth->execute();

$result = $sth->fetchAll();

  if($sth=$result){
  	$_SESSION['u_usuario'] = $usuario;
  	
    header("Location:GPS.php");
  }
  else {
    
  	header("Location:index.php");
  	
  }
?>