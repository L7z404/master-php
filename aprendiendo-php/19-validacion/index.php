<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Validación de formularios PHP</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>

        <?php
            if (isset($_GET['error'])){
                $error = $_GET['error'];
                if ($error == 'faltan_valores'){
                    echo '<strong style="color: red">Introduce todos los datos en los campos del formulario</strong>';
                }
                if ($error == 'nombre'){
                    echo '<strong style="color: red">Introduce bien el nombre</strong>';
                }
                if ($error == 'apellido'){
                    echo '<strong style="color: red">Introduce bien los apellidos</strong>';
                }
                if ($error == 'edad'){
                    echo '<strong style="color: red">Introduce una edad correcta</strong>';
                }
                if ($error == 'email'){
                    echo '<strong style="color: red">Ese email no sirve o no esta bien escrito</strong>';
                }
                if ($error == 'pass'){
                    echo '<strong style="color: red">Neee, esa contraseña no</strong>';
                }
            }
        ?>

        <form method="post" action="procesar_formulario.php">
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br/>

            <label for="apellidos">Apellidos</label><br/>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br/>

            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"><br/>

            <label for="email">Email</label><br/>
            <input type="email" name="email" required="required"><br/>

            <label for="pass">Contraseña</label><br/>
            <input type="password" name="pass" required="required"><br/>

            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>






<?php
