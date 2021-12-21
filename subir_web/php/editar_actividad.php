<?php

include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/62ea397d3a.js"></script>
    <script src="../js/index.js"></script>

    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container-bars">
        <ol>
            <li><a href="../usuario.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fas fa-user-alt"></i>Usuario</a></li>
            <li><a href="../otras_citas.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fas fa-sms"></i></i>Mensajes</a></li>
            <li><a href="../crear_cita.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fas fa-chart-line"></i>Creacion de Actividad</a></li>
            <li><a href="../actividades.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fab fa-accusoft"></i>Actividades</a></li>
            <li><a href="../exportar.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fas fa-download"></i>Exportar</a></li>
            <li><a href="../index.php"><i class="far fa-times-circle"></i>Salir</a></li>
        </ol>
    </div>
    <?php

    $result = "SELECT * FROM usuario";
    $imagen = "SELECT * FROM imagenes";
    $sql = mysqli_query($connect, $result);

    while ($row = mysqli_fetch_assoc($sql)) {
        if ($row['id'] == $_GET['usuario']) {


    ?>
            <div class="visita_header header">
                <div class="background">
                    <img src=" ../<?php
                                    $resul_img = mysqli_query($connect, $imagen);
                                    while ($rows = mysqli_fetch_assoc($resul_img)) {
                                        if ($row['contraseña'] == $rows['codigo']) {
                                            echo $rows['dir_img'];
                                        }
                                    }
                                    ?>" alt="">

                </div>
                <div class="name_usuario">
                    <h4>Gobierno Regional</h4>
                </div>
                <div class="bars"><i class="fas fa-bars icono-bar"></i></div>
            </div>

    <?php
        }
    }
    ?>





    <?php
    /////////////////////////////////////////////////////////////////////
    include("../modal/modal.php");
    ?>
    <div class="visita_article container">
        <?php
        if (isset($_POST['submit'])) {

            $id_person = $_GET['usuario'];
            $title = trim($_POST['titulo']);
            $texto = $_POST['texto'];
            $actividad = intval($_GET['actividad']);
            /////////////////////////////////////

            $actividad = "UPDATE  actividades SET nombre_act='$title',texto='$texto' WHERE id=$actividad";
            $resultado = mysqli_query($connect, $actividad);
            if ($resultado) {
                Mensaje_editar('correcto', 'ACTUALIZANDO', "../actividades.php?usuario=" . $_GET['usuario']);
            } else {
                Mensaje_editar('error', 'ERROR!!..', "editar_actividad.php?usuario=" . $_GET['usuario']);
            }
        }


        $editar = "SELECT *FROM actividades";
        $result_editar = mysqli_query($connect, $editar);

        while ($rows = mysqli_fetch_assoc($result_editar)) {
            if ($rows['id'] == $_GET['actividad']) {

        ?>


                <div class=" formulario_change visita_article container">

                    <form action="" class="change_for" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" value="<?php echo $rows['nombre_act'] ?>" class="form-control text-uppercase" id="titulo" name="titulo" required>
                        </div>
                        <div class="form-group">
                            <label for="texto">Ecriba una nueva Cita</label>
                            <textarea class="form-control texto_cita" name="texto" id="texto" cols="30" rows="5" required><?php echo $rows['texto'] ?></textarea>
                        </div>
                        <div class="btn-group btn_form_add">
                            <button class="btn btn-outline-info" name="submit">Guardar <i class="far fa-save"></i></button>

                        </div>
                    </form>
                </div>
        <?php
        break;
            }
            
        }
        ?>
    </div>
    <script src="../js/modal.js"></script>