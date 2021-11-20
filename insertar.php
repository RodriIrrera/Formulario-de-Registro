<?php
include("cn.php");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$insertar = "INSERT INTO usuario(nombre, apellido, correo, telefono, usuario, clave) VALUES ('$nombre', '$apellido','$correo','$telefono', '$usuario', '$clave')";
$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
    echo "<script>alert('Se ha registrado el usuario con éxito');
    window.location='/practica/consultas.php'</script>";
} else {
    echo "<script>alert('No se pudo registrar');
    window.history.go(-1);</script>";
}
?>