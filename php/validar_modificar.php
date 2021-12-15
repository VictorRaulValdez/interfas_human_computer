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

include ("../modal/modal.php");
include ("connect.php");
$result="SELECT * FROM usuario";

     $nombre=$_POST['nombre'];
     $apellido=$_POST['apellido']; 
     $especialidad=$_POST['especialidad'];
     $contraseña=$_POST['password'];
     $valor=$_GET["usuario"];
   
     $actualizar="UPDATE usuario SET nombre='$nombre',apellidos='$apellido',espe='$especialidad',contraseña='$contraseña' WHERE id='$valor'";
     
    

$resultado=mysqli_query($connect,$actualizar);

 if(!$resultado){
      MensajeAlerta('error','HUBO UN ERROR',"../login.php");
 }
 else{
      MensajeAlerta('correcto','DATOS MODIFICADOS',"../usuario.php?usuario=".$valor);
 }
     
?>
<script src="../js/modal.js"></script>