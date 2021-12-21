<?php

include("../php/connect.php");

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


    <link href="css/ui-darkness/jquery-ui-1.8.16.custom.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="js/jquery-validation-1.9.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery-validation-1.9.0/lib/jquery.metadata.js"></script>
</head>

<body>
    <div class="container-bars">
        <ol>
            <li><a href="../usuario.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fas fa-user-alt"></i>Usuario</a></li>
            <li><a href="../menssage.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fas fa-sms"></i>Mensajes</a></li>
            <li><a href="../crear_cita.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fas fa-chart-line"></i>Creacion de Actividad</a></li>
            <li><a href="../actividades.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fab fa-accusoft"></i>Actividades</a></li>
            <li><a href="exportar.php?usuario=<?php echo $_GET["usuario"] ?>"><i class="fas fa-download"></i>Exportar</a></li>
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
                    <img src="../<?php 
                         $resul_img=mysqli_query($connect,$imagen);
                         while($rows=mysqli_fetch_assoc($resul_img)){
                              if($row['contraseña']==$rows['codigo']){
                                  echo $rows['dir_img'];
                              }
                         }
                     ?>" alt="">
                
                </div>
                <div class="name_usuario"><h4>Gobierno Regional</h4></div>
                <div class="bars"><i class="fas fa-bars icono-bar"></i></div>
            </div>

    <?php
        }
    }
    ?>
