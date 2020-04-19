<?php

require'denegar.php';

require'class/database.php';
$objData = new Database();

$sth = $objData->prepare("SELECT * FROM usuarios WHERE usuario='$user'");

$sth->execute();

$result = $sth->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                 <a href="GPS.php">Home</a>
                <h2>Indexer</h2>
                <span class="fa fa-user-circle"></span>
                <h2>Registro</h2>
            </section>
            <section class="info_items">
            </section>
        </section>

        <form action="modificar.php" class="form_contact" method="POST">
            
            <div class="user_info">
                <?php
                 if($result){
                foreach ($result as $key => $value) {?>
                    
                <label for="names">Nombre Completo</label>
                <input type="text" name="nombre"  value="<?php echo $value['nombre'];?>">

                <label for="email">Direccion *</label>
                <input type="text" name="direccion" value="<?php echo $value['direccion'];?>">

                <label for="email">Telefono *</label>
                <input type="text" name="telefono" value="<?php echo $value['telefono'];?>">

                <label for="mensaje">Edad *</label>
                <input type="text" name="edad" value="<?php echo $value['edad'];?>">

                
                <label for="mensaje">Contraseña *</label>
                <input type="text" name="password" value="<?php echo $value['password'];?>">

                <input type="file" name="photo">
                <?php
                }
            }
                ?>
                <input type="submit" value="Modificar Datos" id="btnSend">
               
            </div>
        </form>

    </section>
</body>
</html>
