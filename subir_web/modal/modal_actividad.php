<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
      </div>

      <!-- Modal body -->
      <div class="modal-body d-flex flex-column align-items-center">
        <img src="" alt="" id="image_modal" width="150" height="150">
        <font size="6"> <label id="label1"></label></font>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer d-flex justify-content-center">

        <a class="btn btn-primary " id="boton_redirec" value="submit" href="">Aceptar</a>


      </div>

    </div>
  </div>
</div>



<?php
$imagen = "";
$mensaje = "";
$redireccion = "";

function Alerta_actividad($opcion, $mensaje, $direccion)
{

  if ($opcion == "correcto") {
    $imagen = "img/bienvenida.png";
  }
  if ($opcion == "error") {
    $imagen = "img/error.jpg";
  }
  echo '<button type="button" id="modal_actividad" style="display:none" data-target="#myModal" data-toggle="modal" data-imagen="' . $imagen . '"
   data-message="' . $mensaje . '" 
   data-redireccion="' . $direccion . '" ></button>';
}
?>