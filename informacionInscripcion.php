<?php
//Obtener los valores del formulario con POST
$documento = $_POST['Documento'];
$confirmarDocumento = $_POST['ConfirmarDocumento'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellidos'];
$correo = $_POST['Correo'];
$confirmarCorreo = $_POST['ConfirmarCorreo'];
$pais = $_POST['Pais'];
$departamento = $_POST['Departamento'];
$ciudad = $_POST['Ciudad'];
$edad = $_POST['Edad'];
$direccion = $_POST['Direccion'];
$telefono = $_POST['Telefono'];
$diplomado = $_POST['Diplomado'];
$informacion = $_POST['Informacion'];
$genero = $_POST['Genero'];
$politica = $_POST['Politica'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Modulo 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <h1>Información de la Inscripción</h1>
    </div>
    
    <div class="contenedor">
        <table border="1">
            <?php
                foreach ($_POST as $clave => $valor) {
                    echo "<tr> <td>" . $clave . "</td>" . "<td>" . $valor . "</td> </tr>";
                }
            ?>
        </table>
    </div>

    <a href="index.php">Regrasar a la calculadora</a> 
</body>
