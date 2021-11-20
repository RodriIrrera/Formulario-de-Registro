<?php
include("cn.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$actualizar = "UPDATE usuario SET nombre='$nombre', apellido='$apellido',
correo='$correo', telefono='$telefono', usuario='$usuario', clave='$clave' WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);
if($resultado) {
    echo "<script>alert('Se han actualizado los cambios correctamente');
    window.location='/practica/edicion.php'</script>";
} else {
    echo "<script>alert('No se pudieron actualizar los cambios');
    window.history.go(-1);</script>";
}
?>