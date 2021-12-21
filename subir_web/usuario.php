<?php
include("header.php");
?>


<?php
   $result="SELECT * FROM usuario";
   $imagen="SELECT * FROM imagenes";
   
   $sql=mysqli_query($connect,$result);
   while($row=mysqli_fetch_assoc($sql)){
          if($row['id']==$_GET['usuario']){  
   

?>



<div class="container col-lg-6 col-lg-offset-3">
     
    <div class="usuario_prefil">
        <div class="head_perfil">
            <div class="imagen_perfil">
                <img src="<?php
                 $result=mysqli_query($connect,$imagen);
                 while($rows=mysqli_fetch_assoc($result)){
                     if($rows['codigo']==$row['contraseña']){
                         echo $rows['dir_img'];
                     }
                 }
                ?>" class="rounded-circle" alt="">
            </div>
        </div>
        <a href="formulario/formulario_perfil.php?usuario=<?php echo $row['id']?>" class="btn btn-primary boton_editar text-light">Editar <i class="fas fa-user-edit"></i></a>
        <div class="body_perfil">
            <div class="name_perfil"><b>Nombre:</b>    <span><?php echo $row['nombre']?></span></div>
            <div class="name_perfil"><b>Apellidos:</b> <span><?php echo $row['apellidos']?></span></div>
            <div class="name_perfil"><b>Cargo:</b>     <span><?php echo $row['espe']?></span></div>
        </div>
        <div class="footer_perfil">

        </div>
    </div>

</div>
<?php
       }
    }
?>