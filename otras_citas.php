<?php

 include("header.php"); 

$actividad = "SELECT * FROM actividades";

$resultado__actividad = mysqli_query($connect, $actividad);


?>





    <div class="visita_article container">
        <div class="actividades_p content">
            <div class="header_actividades_p header_content">
                <h3>Ignoradas</h3>
            </div>
            <div class="article_activiades_p content_article">
            <?php while ($row = mysqli_fetch_assoc($resultado__actividad)) {  ?>
                <div class="card-header card_buttom realizadas_1 ">
                    <div class="card ">
                        <a href="&orden=melania" class="btn btn-primary btn_boots " data-toggle="collapse" data-target="#demo_<?php echo $row['id'] ?>">
                            <div class="content_text_card">
                                <?php echo $row['nombre_act'] ?>
                            </div>
                            <div class="content_fecha_card">
                                <?php
                                
                                        echo $row['fecha_start'];
                                  

                                ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="demo_<?php echo $row['id'] ?>" class="collapse texto_card">
                    <div class="content_text_card text-info">
                        <b><?php echo $row['nombre_act'] ?></b>
                    </div>
                    <div class="content_text_card text-primary">
                        <?php echo $row['texto'] ?>
                    </div>
                    <div class="content_fecha_card text-danger">
                        <?php
                        echo "Ini." . $row['fecha_start'] . " Final " . $row['fecha_end'] . "<br>";
                        echo "Ini. " . $row['hora_start'] . " Final " . $row['hora_end'];

                        ?>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="actividades_r content">

            <div class="header_actividades_r header_content">
                <h3>Rechazadas</h3>

            </div>
            <div class="article_activiades_r content_article table">
                
            <?php 
            $resultado__actividad = mysqli_query($connect, $actividad);
            while ($row = mysqli_fetch_assoc($resultado__actividad)) {  ?>
                <div class="card-header card_buttom realizadas_1 ">
                    <div class="card ">
                        <a href="http:/google.com" class="btn btn-primary btn_boots " data-toggle="collapse" data-target="#demo<?php echo $row['id'] ?>">
                            <div class="content_text_card">
                                <?php echo $row['nombre_act'] ?>
                            </div>
                            <div class="content_fecha_card">
                                <?php

                                echo $row['fecha_start'];

                                ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="demo<?php echo $row['id'] ?>" class="collapse texto_card">
                    <div class="content_text_card text-info">
                        <b><?php echo $row['nombre_act'] ?></b>
                    </div>
                    <div class="content_text_card text-primary">
                        <?php echo $row['texto'] ?>
                    </div>
                    <div class="content_fecha_card text-danger">
                        <?php

                       echo "Ini." . $row['fecha_start'] . " Final " . $row['fecha_end'] . "<br>";
                       echo "Ini. " . $row['hora_start'] . " Final " . $row['hora_end'];

                        ?>
                    </div>
                </div>
            <?php } ?>
               
            </div>
            <div class="footer_activiades_r">

            </div>
        </div>

    </div>
</body>

</html>