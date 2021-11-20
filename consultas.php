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
    <title>Página Principal</title>
</head>
<body>

    <div class="container-add">
        <h2 class="container_title">Registar Usuario</h2>
        <form action="insertar.php" method="post" class="container_form">
            <label for="" class="container_label">Nombre</label>
            <input name="nombre" type="text" class="container_input" placeholder="Ingrese su nombre">
            <label for="" class="container_label">Apellido</label>
            <input name="apellido" type="text" class="container_input" placeholder="Ingrese su apellido">
            <label for="" class="container_label">Correo</label>
            <input name="correo" type="email" class="container_input" placeholder="Ingrese su correo">
            <label for="" class="container_label">Teléfono</label>
            <input name="telefono" type="number" class="container_input" placeholder="Ingrese su teléfono">
            <label for="" class="container_label">Usuario</label>
            <input name="usuario" type="text" class="container_input" placeholder="Ingrese su usuario">
            <label for="" class="container_label">Contraseña</label>
            <input name="clave" type="password" class="container_input" placeholder="Ingrese su contraseña">
            <input type="submit" class="container_submit" value="Registrarse">
        </form>
    </div>


    <div class="container-table">
        <div class="table_title">Datos de usuario <a href="edicion.php" class="title_edit">Editar Usuario</a></div>
        <div class="table_header">Nombre</div>
        <div class="table_header">Apellido</div>
        <div class="table_header">Correo</div>
        <div class="table_header">Teléfono</div>
        <div class="table_header">Usuario</div>
        <?php $resultado = mysqli_query($conexion, $usuarios);
        while($row=mysqli_fetch_assoc($resultado)) {?>
        <div class="table_item"><?php echo $row["nombre"]?></div>
        <div class="table_item"><?php echo $row["apellido"]?></div>
        <div class="table_item"><?php echo $row["correo"]?></div>
        <div class="table_item"><?php echo $row["telefono"]?></div>
        <div class="table_item"><?php echo $row["usuario"]?></div>
        <?php } mysqli_free_result($resultado); ?>
    </div>
</body>
</html>