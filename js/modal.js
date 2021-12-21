

$(document).ready(function () {
  LlamarModal();
  $('#verModal').click();
  $('#modal_editar').click();
});



function LlamarModal() {
  $('#myModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var dato_i = button.data('imagen');
    var dato_m = button.data('message');
    var dato_r = button.data('redireccion');
    var modal = $(this); ///actualizar el contenido del modal
    $('#image_modal').attr('src', dato_i);
    //document.querySelector('#alerta').innerHTML=alerta_(dato_alert);
    document.getElementById('label1').innerHTML = dato_m;
    $('#boton_redirec').attr('href', dato_r);
  });
}


