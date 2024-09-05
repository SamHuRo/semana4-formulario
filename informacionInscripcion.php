<?php
//Obtener los valores del formulario con POST
$documento = $_POST['Documento'];
$confirmarDocumento = $_POST['ConfirmarDocumento'];
$correo = $_POST['Correo'];
$confirmarCorreo = $_POST['ConfirmarCorreo'];

if($documento != $confirmarDocumento){
    header("Location: index.php");
    exit;
}

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
