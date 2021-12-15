<link rel="stylesheet" href="../css/index.css">

<?php
include("../header.php");
include("../php/connect.php");
?>
<div class=" formulario_change visita_article container">

    <?php
    $result = "SELECT * FROM usuario";
    $sql = mysqli_query($connect, $result);
    while ($row = mysqli_fetch_assoc($sql)) {
        if ($row['id'] == $_GET['usuario']) {
    ?>


            <form action="../php/validar_modificar.php?usuario=<?php echo $row['id'] ?>" method="post" class="change_for">

                <h3 class="text-primary title_form">Gobierno Regional</h3>

                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Nombre" name="nombre" value="<?php echo $row['nombre']?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Apellidos" name="apellido" value="<?php echo $row['apellidos']?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="especialidad" name="especialidad" value="<?php echo $row['espe']?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="contraseña" name="password" value="<?php echo $row['contraseña']?>">
                </div>
                <div class="form-group file_form">
                <input type="file" class="update_file" id="customFile" name="file">
                </div>
        <?php
        }
    }
        ?>
        <div class="btn-group btn_form_add">
            
            <button class="btn btn-outline-info" value="submit">Guardar <i class="far fa-save"></i></button>
            </form>
            <button class="btn btn-outline-success button_file"> Cambiar Foto   <i class="fas fa-file-archive"></i></button>
        </div>
        </div>
       
            
</div>

<script src="../js/index.js"></script>