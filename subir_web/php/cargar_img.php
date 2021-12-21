<?php
    
    include("connect.php");
    //$connect=mysqli_connect("localhost","root","","gobierno");
   var_dump($_FILES);
    if(isset($_FILES['file'])){
    
      $file_name=$_FILES['file']['name'];
      $file_tmp=$_FILES['file']['tmp_name'];

      //nam e of folder where you want to n

      $upload_folder="../imagen_p/";

      $moveFile=move_uploaded_file($file_tmp,$upload_folder.$file_name);

     if($moveFile){

       echo "file move sucessfully";

     }
}    

   
   
    
    ?>
    