<?php

function convert_time($time)
{
    $new_time = "";
    $i = 0;
    while ($i < strlen($time)) {
        if ($time[$i] != ':') {
            $new_time = $new_time . $time[$i];
        }
        $i++;
    }
    return strval($new_time);
}



if (isset($_POST['submit'])) {


    $bandera = true;

    $id_person = $_GET['usuario'];
    $title = trim($_POST['titulo']);
    $texto = $_POST['texto'];
    $time_start = trim($_POST['t_start']);
    $time_end = trim($_POST['t_end']);
    $date_start = trim($_POST['f_start']);
    $date_end = trim($_POST['f_end']);
    //////////////////////////////////////
    //archivos en se guardaran en carpete archivos
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    $upload_folder = "archivos/";
    $moveFile = move_uploaded_file($file_tmp, $upload_folder . $file_name);


    $time_db = "SELECT*FROM actividades ";
    $result = mysqli_query($connect, $time_db);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['fecha_start'] == $date_start || $row['fecha_end'] == $date_end) {
            if ($time_start >= $row['hora_start'] && $time_start <= $row['hora_end'] || $time_end >= $row['hora_start'] && $time_end <= $row['hora_end']) {
                $bandera = false;
            }
        }
    }



    //,texto,fecha_start,fecha_end,hora_start,hora_end,creado_por
    //,'$texto','$date_start','$date_end','$time_start','$time_end','$id_person'

    if (!$bandera) {

        Mensaje_editar('error_', 'ESAS HORAS ESTAS OCUPADO', "crear_cita.php?usuario=" . $_GET['usuario']);
    } else {
        $actividad = "INSERT INTO actividades (nombre_act,texto,fecha_start,fecha_end,hora_start,hora_end,creado_por,opcion) 
        VALUE ('$title',$texto,'$date_start','$date_end','$time_start','$time_end','$id_person','0')";
        $resultado = mysqli_query($connect, $actividad);

        if (strlen($file_name) > 1) {
            $file = "INSERT INTO archivos(file_pdf,usuario) VALUES ('$upload_folder.$file_name','$date_start')";
            $result_file = mysqli_query($connect, $file);
        }

        if ($resultado) {

            Mensaje_editar('correcto_', 'ACTIVIDAD CREADO', "actividades.php?usuario=" . $_GET['usuario']);
        } else {
            echo "entro en coneccion";
            Mensaje_editar('error_', 'ERROR DE CONECCIÓN', "crear_cita.php?usuario=" . $_GET['usuario']);
        }
    }
}


?>
<script src="js/modal.js"></script>