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

include ("connect.php");
include ("../modal/modal.php");
      
   $bandera=true;

     $id_person=$_GET['usuario'];
     $title=trim($_POST['titulo']);
     $texto=$_POST['texto'];
     $time_start=trim($_POST['t_start']);
     $time_end=trim($_POST['t_end']);
     $date_start=trim($_POST['f_start']);
     $date_end=trim($_POST['f_end']);

     $time_db="SELECT*FROM actividades ";
     $result=mysqli_query($connect,$time_db);

     while ($row = mysqli_fetch_assoc($result)) {
               if($row['fecha_start']==$fecha_start){
                          if($time_start>=$row['hora_start']&&$time_start<=){

                          }
               }
     }
      
      
     
     //,texto,fecha_start,fecha_end,hora_start,hora_end,creado_por
     //,'$texto','$date_start','$date_end','$time_start','$time_end','$id_person'
     $actividad="INSERT INTO actividades (nombre_act,texto,fecha_start,fecha_end,hora_start,hora_end,creado_por) 
     VALUE ('$title','$texto','$date_start','$date_end','$time_start','$time_end','$id_person')";
     $resultado=mysqli_query($connect,$actividad);
  
 if(!$resultado){
      MensajeAlerta('error','HUBO UN ERROR',"validar_cita.php?usuario=".$_GET['usuario']);
 }
 else{
      MensajeAlerta('correcto','ACTIVIDAD AGREGADA',"../actividades.php?usuario=".$_GET['usuario']);
 }
     
?>
<script src="../js/modal.js"></script>