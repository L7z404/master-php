<?php
/*
 * hacer una interfaz de usuario con 2 inputs y 4 botones uno para sumar, restar, dividir, multiplicar
 */
    $resultado = false;
    if (isset($_POST['n1']) && isset($_POST['n2'])){

        if (isset($_POST['sumar'])){
            $resultado = "El resultado es: ".(($_POST['n1'])+($_POST['n2']));
        }
        if (isset($_POST['restar'])){
            $resultado = "El resultado es: ".(($_POST['n1'])-($_POST['n2']));
        }
        if (isset($_POST['multiplicar'])){
            $resultado = "El resultado es: ".(($_POST['n1'])*($_POST['n2']));
        }
        if (isset($_POST['dividir'])){
            $resultado = "El resultado es: ".(($_POST['n1'])/($_POST['n2']));
        }

    }
?>


<DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form action="" method="post">
            <label for="n1">Numero1</label><br/>
            <input type="number" name="n1"/><br/><br/>

            <label for="n2">Numero2</label><br/>
            <input type="number" name="n2"/><br/><br/>

            <input type="submit" value="Sumar" name="sumar" />
            <input type="submit" value="Restar" name="restar" />
            <input type="submit" value="Multiplicar" name="multiplicar" />
            <input type="submit" value="Dividir" name="dividir" />
        </form>

        <?php
            if ($resultado != false):
                echo "<h2>$resultado</h2>";
            endif;
        ?>
    </body>
</html>

