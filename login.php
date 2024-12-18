<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="/css/estilos_login.css">
</head>
<body>
    <div>
        <img src="">
        <form action = "<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]); ?>" method="POST" >
        <label for="usuario">Usuario</label>
        <input id="usuario" name="usuario" type="text" value="<?php if(isset($usuario)) echo $usuario ?>" >
        <!-- mantiene el usuario  -->
        <label for="clave">Clave</label>
        <input name="clave" type="password">
        <input type="submit">
        </form>
    </div>
</body>
</html>