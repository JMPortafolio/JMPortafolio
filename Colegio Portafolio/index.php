<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Resultados de lectura de base de datos remota</h1><br><br>
        <table>
            <tr>
                <td>ID</td><td>Nombre</td><td>DBN</td>
            </tr>
            <tr>
                <?php
                    $conexion = mysqli_connect("localhost", "id900053_jeisonx47", "Jeisonx124563", "id900053_cole_portafolio") or die("Hubo un error al conectarse con la base de datos remota. error: " . mysqli_error($conexion));

                    $resultado = mysqli_query($conexion, "SELECT * FROM Materias");

                    while ($dato = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                        echo "<td>". $dato[0] ."</td>";
                        echo "<td>". $dato[1] ."</td>";
                        echo "<td>". $dato[2] ."</td>";
                        echo "<tr/>";
                    }

                    mysqli_close($conexion);
                ?>
            </tr>
        </table>
    </body>
</html>