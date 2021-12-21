<?php

include("header.php");

$actividad = "SELECT * FROM mensajes";
$usuario = "SELECT * FROM usuario";
$imagenes = "SELECT * FROM imagenes";
date_default_timezone_set("America/Lima");

  if(isset($_POST['submit'])){
    $menssage=$_POST['mensa'];
    $fecha=date("y/m/d");
    $hora=date("H:i:s");
    $id=$_GET['usuario'];
        $chat="INSERT INTO mensajes(mensaje,fecha,hora,usuario) VALUES('$menssage','$fecha','$hora','$id')";
        $result_chat=mysqli_query($connect,$chat);
        if(!$result_chat){
               echo "hubo un error al enviar el mensaje";
        }
   }
?>





<div class="visita_article container">

    <div class="contenido_texto">
        <?php

        $resultado__actividad = mysqli_query($connect, $actividad);
        while ($row = mysqli_fetch_assoc($resultado__actividad)) {

            if ($row['usuario'] == $_GET['usuario']) {
                $resultado_usuario = mysqli_query($connect, $usuario);
                while ($rows = mysqli_fetch_assoc($resultado_usuario)) {
                    
                    if ($rows['id'] == $_GET['usuario']) {
                        
        ?>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row justify-content-start">
                                <div class="p-2">
                                    <div class="img_message">
                                        <?php
                                           $resultados_img=mysqli_query($connect,$imagenes);
                                           while($img=mysqli_fetch_assoc($resultados_img)){
                                               if($_GET['usuario']==$img['id']){
                                                      
                                           
                                        ?>
                                        <img src="<?php echo $img['dir_img'] ?>" alt="">
                                        <?php  }
                                                     }    ?>
                                    </div>
                                </div>
                                <div class="p-2 bg-secondary text-white rounded m-1">
                                    <?php echo $row['mensaje'] ?>

                                </div>
                            </div>
                            <div class="name_user_chat text-danger">
                                <?php echo $rows['espe'] ?>
                            </div>
                        </div><br>
                <?php
                    }
                }
            } else {

                ?>
                <div class="d-flex flex-column justify-content-center">
                    <div class="d-flex flex-row justify-content-end ">
                        <div class="p-2 bg-info m-1 rounded text-white">
                            <?php echo $row['mensaje'] ?>
                        </div>
                        <div class="p-2  ">
                            <div class="img_message">
                                <?php
                                           $resultados_img=mysqli_query($connect,$imagenes);
                                           while($img=mysqli_fetch_assoc($resultados_img)){
                                               if($row['usuario']==$img['id']){
                                                      
                                           
                                        ?>
                                        <img src="<?php echo $img['dir_img'] ?>" alt="">
                                        <?php  }
                                                     }    ?>
                            </div>
                        </div>
                    </div>
                    <div class="name_user_chat text-success align-self-end">
                        <?php
                        $resultado_usuario = mysqli_query($connect, $usuario);
                        while ($rows = mysqli_fetch_assoc($resultado_usuario)) {
                            if ($row['usuario'] == $rows['id']) {
                                echo $rows['espe'];
                            }
                        }
                        ?>
                    </div>
                </div><br>
        <?php
            }
        }
        ?>
    </div>
    <div class="footer_activiades_r">
        <form action="" method="post">

            <div class="btn-group d-flex">
                <input type="text" class="form-control flex-grow-1" name="mensa">
                <button name="submit" class="btn btn-outline-success"><i class="fas fa-paper-plane"></i></button>
            </div>

        </form>
    </div>
</div>

</div>
</body>

</html>