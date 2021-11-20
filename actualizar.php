<?php
include("cn.php");
$id = $_GET["id"];
$usuarios = "SELECT * FROM usuario WHERE id='$id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    <script src="/js/functions.js?v=<?php echo time(); ?>"></script>
    <title>Actualizar</title>
</head>
<body>

    <form class="container-table container-table-editado" action="procesar_actualizar.php" method="post">
        <div class="table_title table_title_editado"><a href="edicion.php" class="home">Cancelar modificación</a>Datos de usuario</div>
        <div class="table_header">Nombre</div>
        <div class="table_header">Apellido</div>
        <div class="table_header">Correo</div>
        <div class="table_header">Teléfono</div>
        <div class="table_header">Usuario</div>
        <div class="table_header">Contraseña</div>
        <div class="table_header">Operación</div>
        <?php $resultado = mysqli_query($conexion, $usuarios);
        while($row=mysqli_fetch_assoc($resultado)) {?>
        <input type="hidden" class="table_input" value="<?php echo $row["id"];?>" name="id">
        <input type="text" class="table_input" value="<?php echo $row["nombre"];?>" name="nombre">
        <input type="text" class="table_input" value="<?php echo $row["apellido"];?>" name="apellido">
        <input type="text" class="table_input" value="<?php echo $row["correo"];?>" name="correo">
        <input type="text" class="table_input" value="<?php echo $row["telefono"];?>" name="telefono">
        <input type="text" class="table_input" value="<?php echo $row["usuario"];?>" name="usuario">
        <input type="password" class="table_input" value="<?php echo $row["clave"];?>" name="clave">
        <?php } mysqli_free_result($resultado); ?>
        <input type="submit" value="Actualizar" class="container_submit container_submit_actualizar">
    </form>
</body>
</html>