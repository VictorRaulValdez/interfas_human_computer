



  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
           
           
           <h2 class="modal-title " id="alerta">Alerta</h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <img src="" alt="" id="image_modal" width="150" height="150">
          <font size="6"> <label id="label1"></label></font>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
        
        <a class="btn btn-primary" id="boton_redirec" value="submit" href="">OK</a>   
   
          
        </div>

      </div>
    </div>
  </div>



<?php
$imagen = "";
$mensaje = "";
$redireccion = "";
$alerta="";

function MensajeAlerta($opcion, $mensaje, $direccion)
{

  if ($opcion == "correcto") {
    $imagen = "../img/bienvenida.png";
    $alerta="Exelente";
  }
  if ($opcion == "error") {
    $imagen = "../img/error.jpg";
    $alerta="Alerta!!";
  }

  echo '<button type="button" id="verModal" style="display:none" data-target="#myModal" data-toggle="modal" data-imagen="' . $imagen . '"
   data-message="' . $mensaje . '" 
   data-redireccion="' . $direccion . '"
   data-alerta="'.$alerta.'" ></button>';
}
?>

