<?php
require'denegar_admin.php';

require'class/database.php';
$objData = new Database();

$sth = $objData->prepare("SELECT * FROM usuarios WHERE Estado='Perdido'");

$sth->execute();

$result = $sth->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Indexer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desaparecidos</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
             <a href="agregarUsuario.php"> <button type="button" class="btn btn-success">Añadir Usuario</button></a>
              <br/>
                <span class="fa fa-user-circle"></span>
                <h2>Indexer</h2>
            </section>
            <section class="info_items">
            </section>
        </section>

  
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Edad</th>
        <th>Estado</th>
        <th><center>Opciones</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
                 if($result){
                foreach ($result as $key => $value) {?>
        <td><a href="perdido.php?id=<?php echo $value['id'];?>"><img src="perfil.jpg" width="100" height="100"></a></td>
        <td><br/> <?php echo $value['nombre'];?></td>
        <td><br/><?php echo $value['telefono'];?></td>
        <td><br/><?php echo $value['edad'];?></td>
        <td><br/><?php echo $value['Estado'];?></td>
        <input type="hidden" name="id" value="<?php echo $value['id'];?>">
        <td><br/><a href="localizar.php?id=<?php echo $value['id'];?>"><button type="button" class="btn btn-outline-success">Localizado</button></a>
        </td>
        
      </tr>
    <?php
  }
}?>
    </tbody>
  </table>
  
<a href="cerrar_admin.php">Cerrar</a>
</body>
</html>
