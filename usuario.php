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
        <div class="body_perfil">
            <a href="formulario/formulario_perfil.php?usuario=<?php echo $row['id']?>" class="btn btn-primary">Modificar Datos</a>
            <div class="name_perfil"><b><h2><?php echo $row['nombre'] ?></h2></b></div>
            <div class="cargo_perfil"><b><?php echo $row['espe'] ?></b></div>
        </div>
        <div class="footer_perfil">

        </div>
    </div>

</div>
<?php
       }
    }
?>