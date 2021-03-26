<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <script src="JS/validacion.js"></script>
    <link rel="stylesheet" href="css/estilo2.css">
    
</head>
<body>
    <form action="Controlador/user.php" method="POST">
        <section class="formulario-login">
            <h5>Login</h5>
            <input class="datos-login" type="text" name="usuario" id="usuario" placeholder="Usuario"/>
            <input class="datos-login" type="password" name="pass" id="pass" placeholder="Contraseña">
            <input class="boton-login" type="submit" name="" value="Ingresar">
            <p><a href="">¿Olvidaste tu contraseña?</a></p>     
        </section>
    </form>
    
</body>
</html>