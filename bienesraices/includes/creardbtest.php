<?php
//Vamos a conectarnos a la base de datos web
$servidor = "localhost";
$usuario = "root";
$password = "alberto";
//$basedatos = "tienda";

//crear conexion
$conexion = new mysqli ($servidor, $usuario, $password);
//chequear conexion
if ($conexion->connect_error) {
    die ("la conexion ha fallado: " . $conexion->connect_error);   
}else{
    print "ha sido un exito la conexion";
}


//crear la base de datos
$sql = "CREATE DATABASE bienesraices";
if ($conexion->query($sql) === TRUE) {
    echo "La base de datos ha sido creada de manera satisfactoria";
}else{echo "Ha ocurrido un error en la creacion de la base de datos: " . $conexion->error;
}
?>
