<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRATAMIENTO CORREO</title>
    <style>
        body {
            width: 80%;
            background-color: black;
            color: white;
            text-align: center;
            margin: auto;
        }

        spam {
            color: aqua;
        }
    </style>
</head>

<body>
    <h1>Tratamiento correo</h1>
    <p>
        Realizar un programa en HTML que pida una dirección de correo electrónico, no deberá validarse, se supone que es correcta (supongamos que se ingresó programacion@hotmail.com.ar). Luego, tendrá que llamar por medio del método GET, a un programa PHP que contendrá 4 funciones. La función Nombre deberá retornar al script principal sólo el nombre del usuario (programacion); la función Dominio deberá retornar el nombre del dominio (hotmail); la función Tipo retornará el tipo (com); y la función Pais retornará el país al que hace referencia la dirección (ar). Luego en el script principal deberá imprimir por pantalla los 4 datos retornados.
    </p>
    <form action="Tratamiento_correo.php" method="GET">
        <H2>Ejercicio Tarea</H2>
        <label> INGRESA CORREO ELECTRONICO </label>
        <br />
        <br>
        <label> Ingresar</label>
        <input type="text" name="corre" id="corre" required>
        <br>
        <br>
        <input type="submit" value="Ver los cuatro datos" name="datos" id="datos">
    </form>
    <?php
    if (isset($_GET["datos"])) {
       $corre = $_GET["corre"];
        $largo = strlen($corre);
        $corte1 = strpos($corre, "@");
        $nombre = substr($corre, 0, $corte1);

        $resto = substr($corre, strlen($nombre) + 1, $largo);
        $dominio = substr($resto, 0, strpos($resto, "."));

        $tipo = substr($resto, strpos($resto, ".") + 1, strlen($resto) - strripos($resto, "."));
        $pais = substr($resto, strrpos($resto, ".") + 1, strlen($resto));
    echo "<p>El nombre es = <spam>" . $nombre . " </spam></p><br>";
    echo "<p>El dominio es = <spam>" . $dominio . "</spam></p><br>";
    echo "<p>El tipo es = <spam>" . $tipo . "</spam></p><br>";
    echo "<p>El pais es = <spam>" . $pais . "</spam></p><br>";
}

    ?>















</body>

</html>