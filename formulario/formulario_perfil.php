<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<?php

include("../modal/modal.php");
include("../php/connect.php");

if (isset($_POST['submit'])) {
    $result = "SELECT * FROM usuario";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $especialidad = $_POST['especialidad'];
    $contraseña = $_POST['password'];
    $valor = $_GET["usuario"];

    $actualizar = "UPDATE usuario SET nombre='$nombre',apellidos='$apellido',espe='$especialidad',contraseña='$contraseña' WHERE id='$valor'";



    $resultado = mysqli_query($connect, $actualizar);

    if (!$resultado) {
        
        Mensaje_editar('error', 'HUBO UN ERROR', "formulario_perfil.php");
    } else {
        Mensaje_editar('correcto', 'DATOS MODIFICADOS', "../usuario.php?usuario=" . $valor);
    }
}

?>
<script src="../js/modal.js"></script>

<?php
include("header.php");

?>
<div class=" formulario_change visita_article container">

    <?php
    $result = "SELECT * FROM usuario";
    $sql = mysqli_query($connect, $result);
    while ($row = mysqli_fetch_assoc($sql)) {
        if ($row['id'] == $_GET['usuario']) {
    ?>


            <form action="" method="post" class="change_for">

                <h3 class="text-primary title_form">Gobierno Regional</h3>

                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Nombre" name="nombre" value="<?php echo $row['nombre'] ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Apellidos" name="apellido" value="<?php echo $row['apellidos'] ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="especialidad" name="especialidad" value="<?php echo $row['espe'] ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="contraseña" name="password" value="<?php echo $row['contraseña'] ?>">
                </div>
                <div class="form-group file_form">
                    <input type="file" class="update_file" id="customFile" name="file">
                </div>
        <?php
        }
    }
        ?>
        <div class="btn-group btn_form_add">

            <button class="btn btn-outline-info" value="submit" name="submit">Guardar <i class="far fa-save"></i></button>
            </form>
            <button class="btn btn-outline-success button_file"> Cambiar Foto <i class="fas fa-file-archive"></i></button>
</div>
</div>


</div>

<script src="../js/index.js"></script>