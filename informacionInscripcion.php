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
$departamento = $_POST['Departamento'];
$ciudad = $_POST['Ciudad'];
$edad = $_POST['Edad'];
?>

<h1>El resultado es: <?php echo $resultado; ?></h1>
<a href="index.php">Regrasar a la calculadora</a>