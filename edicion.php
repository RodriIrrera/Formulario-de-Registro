<?php
include("cn.php");
$usuarios = "SELECT * FROM usuario";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    <script src="/js/functions.js?v=<?php echo time(); ?>"></script>
    <title>Página de Edición</title>
</head>
<body>

    <div class="container-table container-table-edit">
        <div class="table_title table_title_edit"><a href="consultas.php" class="home">Volver a Inicio</a> Datos de usuario</div>
        <div class="table_header">Nombre</div>
        <div class="table_header">Apellido</div>
        <div class="table_header">Correo</div>
        <div class="table_header">Teléfono</div>
        <div class="table_header">Usuario</div>
        <div class="table_header">Operación</div>
        <?php $resultado = mysqli_query($conexion, $usuarios);
        while($row=mysqli_fetch_assoc($resultado)) {?>
        <div class="table_item"><?php echo $row["nombre"]?></div>
        <div class="table_item"><?php echo $row["apellido"]?></div>
        <div class="table_item"><?php echo $row["correo"]?></div>
        <div class="table_item"><?php echo $row["telefono"]?></div>
        <div class="table_item"><?php echo $row["usuario"]?></div>
        <div class="table_item">
        <a href="actualizar.php?id=<?php echo $row["id"];?>" class="table_item_mod">Editar</a>|
        <a href="procesar_eliminar.php?id=<?php echo $row["id"];?>" class="table_item_del">Eliminar</a>
        </div>
        <?php } mysqli_free_result($resultado); ?>
    </div>
    <script src="confirmacion.js"></script>
</body>
</html>