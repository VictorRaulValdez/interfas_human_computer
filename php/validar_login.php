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

     $usuario=$_POST['usuario'];
     $contraseña=$_POST['password']; 
     $bandera=true;
      
     $valor="";
     

$sql=mysqli_query($connect,$result);
while($row=mysqli_fetch_assoc($sql)){
       if($contraseña==$row['contraseña']){
             $bandera=false;
             $valor=$row['id'];
       }
}
 if($bandera==true){
      MensajeAlerta('error','NO PUEDES ACCEDER',"../index.php");
 }
 else{
      MensajeAlerta('correcto','BIENVENIDO',"../usuario.php?usuario=".$valor);
 }
     
?>
<script src="../js/modal.js"></script>