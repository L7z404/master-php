<DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre: </label>
                <p><input type="text" name="nombre" /></p>

            <label for="apellido">Apellido: </label>
                <p><input type="text" name="apellido"></p>

            <label for="boton">Botón: </label>
                <p><input type="button" name="boton" value="Haz Clic Aqui" /></p>

            <label for="sexo">Sexo: </label>
                <p>
                    Hombre: <input type="checkbox" name="sexo" value="Hombre">
                    Mujer: <input type="checkbox" name="sexo" value="Mujer" checked="checked">
                </p>

            <label for="color">Color: </label>
                <p><input type="color" name="color" /></p>

            <label for="fecha">Fecha: </label>
                <p><input type="date" name="fecha"></p>

            <label for="correo">Correo: </label>
                <p><input type="email" name="correo" /></p>

            <label for="archivo">Archivo: </label>
                <p><input type="file" name="archivo" multiple="multiple"></p>

            <!-- type = "hidden" es para esconder campos-->
            <label for="numero">Numero: </label>
                <p><input type="number" name="numero"></p>

            <label for="contraseña">Contraseña: </label>
                <p><input type="password" name="contraseña"></p>

            <label for="continente">Continente: </label>
                <p>
                    <strong>Asia:</strong><input type="radio" name="continente" value="Asia">
                    <strong>America:</strong><input type="radio" name="continente" value="America">
                    <strong>Europa: </strong><input type="radio" name="continente" value="Europa">
                </p>

            <label for="web">Pagina Web: </label>
                <p><input type="url" name="web"></p>


            <textarea name="" id="" cols="30" rows="10"></textarea><br/>

            Peliculas:
            <select name="peliculas" id="">
                <option value="Interestellar">Interestellar</option>
                <option value="Kill Bill">Kill Bill</option>
                <option value="Inception">Inception</option>
            </select> <br/>
            
            <input type="submit" name="enviar">
        </form>
    </body>
</html>