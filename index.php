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
        <h1>Formulario</h1>
    </div>

    <form method="POST" action="informacionInscripcion.php">
        <label for="DocumentoLabel">Numero de documento:</label>
	    <input type="number" name="Documento" required=""><br><br>

        <label for="ConfirmarDocumentoLabel">Confirmar Numero de documento:</label>
	    <input type="number" name="ConfirmarDocumento" required=""><br><br>

        

        <label for="NombreLabel">Nombre:</label>
	    <input type="text" name="Nombre"><br><br>

        <label for="ApellidosLabel">Apellidos:</label>
	    <input type="text" name="Apellidos"><br><br>

        <label for="CorreoLabel">Correo:</label>
	    <input type="email" name="Correo" required=""><br><br>

        <label for="ConfirmarCorreoLabel">Confirmar Correo:</label>
	    <input type="email" name="ConfirmarCorreo" required=""><br><br>

	    <label for="PaisLabel">Pais:</label>
	    <select name="Pais">
		    <option disabled="">Seleccione</option>
		    <option value="Colombia">Colombia</option>
		    <option value="Venezuela">Venezuela</option>
		    <option value="Ecuador">Ecuador</option>
		    <option value="Argentina">Argentina</option>
            <option value="Mexico">Mexico</option>
            <option value="Otro">Otro</option>
	    </select><br><br>

	    <label for="DepartamentoLabel">Departamento:</label>
	    <input type="text" name="Departamento"><br><br>

        <label for="CiudadLabel">Ciudad:</label>
	    <input type="text" name="Ciudad"><br><br>

        <label for="EdadLabel">Edad:</label>
	    <select name="Edad">
		    <option disabled="">Seleccione</option>
		    <option value="1">Menor de 18</option>
		    <option value="2">18 a 25</option>
		    <option value="3">26 a 35</option>
		    <option value="4">36 a 45</option>
            <option value="5">Mayor a 45</option>
	    </select><br><br>

        <label for="DireccionLabel">Direccion:</label>
	    <input type="text" name="Direccion"><br><br>

        <label for="TelefonoLabel">Telefono de Contacto:</label>
	    <input type="text" name="Telefono" maxlength="10"><br><br>

        <label for="DiplomadoLabel">Diplomado:</label>
	    <select name="Diplomado">
		    <option disabled="">Seleccione</option>
		    <option value="php">Programación en PHP</option>
		    <option value="java">Programación en Java</option>
		    <option value="mysql">Bases de Datos en MySQL</option>
		    <option value="diseño digital">Diseño Digital</option>
            <option value="marketing">Marketing</option>
	    </select><br><br>

        <label for="InformacionLabel">Cómo se enteró de la institución:</label>
        <?php
        // Array con las opciones
        $informacion = array(
            "Internet" => "internet",
            "Correo Electronico" => "email",
            "Redes Sociales" => "redesSociales" 
        );

        // Valor seleccionado por defecto (opcional)
        $valor_seleccionado = "valor2";

        // Generar los inputs
        foreach ($informacion as $texto => $valor) {
            echo '<input type="radio" name="Informacion" value="' . $valor . '"';
            if ($valor == $valor_seleccionado) {
                echo ' checked';
            }
            echo '>' . $texto . '<br>';
        }
        ?><br><br>

        <label for="GeneroLabel">Genero:</label>
        <?php
        // Array con las opciones
        $genero = array(
            "Masculino" => "masculino",
            "Femenino" => "femenino",
            "Otro" => "otro"
        );

        // Valor seleccionado por defecto (opcional)
        $valor_seleccionado = "valor2";

        // Generar los inputs
        foreach ($genero as $texto => $valor) {
            echo '<input type="radio" name="Genero" value="' . $valor . '"';
            if ($valor == $valor_seleccionado) {
                echo ' checked';
            }
            echo '>' . $texto . '<br>';
        }
        ?><br><br>

        <label for="PoliticaLabel">Política de tratamiento de datos</label>
	    <?php
        // Array con las opciones
        $politica = array(
            "Acepto" => "si",
            "No Acepto" => "no",
        );

        // Valor seleccionado por defecto (opcional)
        $valor_seleccionado = "valor2";

        // Generar los inputs
        foreach ($politica as $texto => $valor) {
            echo '<input type="radio" name="Politica" value="' . $valor . '"';
            if ($valor == $valor_seleccionado) {
                echo ' checked';
            }
            echo '>' . $texto . '<br>';
        }
        ?><br><br>

        <a href="informacionInscripcion.php">
            <input type="submit" value="Enviar">
        </a>
    </form>
</body>
</html>