<?php

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

<?php
// Conectar a la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "alberto";
$basedatos = "bienesraices";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $basedatos);
$conexion->set_charset("utf8");

// Chequear conexión
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);   
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $opciones = htmlspecialchars($_POST['opciones']);
    $contacto = htmlspecialchars($_POST['contacto']);
    $fecha = isset($_POST['fecha']) ? htmlspecialchars($_POST['fecha']) : '';
    $hora = isset($_POST['hora']) ? htmlspecialchars($_POST['hora']) : '';

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO contactos (nombre, email, telefono, mensaje, opciones, contacto, fecha, hora) 
            VALUES ('$nombre', '$email', '$telefono', '$mensaje', '$opciones', '$contacto', '$fecha', '$hora')";

    if ($conexion->query($sql) === TRUE) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    // Mostrar los datos recibidos
    echo "<h1>Datos recibidos</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
    echo "<p><strong>Compra:</strong> $opciones</p>";
    echo "<p><strong>Contacto preferido:</strong> $contacto</p>";
    if ($contacto == 'telefono') {
        echo "<p><strong>Fecha:</strong> $fecha</p>";
        echo "<p><strong>Hora:</strong> $hora</p>";
    }
} else {
    // Si no se accedió al script a través de un método POST
    echo "Por favor, envía el formulario.";
}

// Cerrar la conexión
$conexion->close();
?>

<?php
    incluirTemplate('footer');
?>