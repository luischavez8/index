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
                <h2>Administración</h2>
                <span class="fa fa-user-circle"></span>
                
            </section>
            <section class="info_items">
            </section>
        </section>

        <form action="login_admin.php" class="form_contact" method="POST">
            
            <div class="user_info">
                <br/><br/><br/><br/><br/>
                <label for="mensaje">Usuario *</label>
                <input type="text"  name="usuarioA">
                <br/><br/><br/>
                <label for="mensaje">Contraseña *</label>
                <input type="text" name="passwordA">
                <input type="submit"  value="Iniciar session" id="btnSend">
            </div>
        </form>
    </section>
</body>
</html>