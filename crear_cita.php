<?php include("header.php"); ?>
<div class=" formulario_change visita_article container">

    <form action="php/validar_cita.php?usuario=<?php echo $_GET['usuario'] ?>" class="change_for" method="post" >

        <h3 class="text-primary title_form">Crear Cita</h3>
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo"name="titulo">
        </div>
        <div class="form-group">
            <label for="texto">Ecriba una nueva Cita</label>
            <textarea class="form-control texto_cita" name="texto" id="texto" cols="30" rows="5"></textarea>
        </div>
        <div class="grupo_date_time">
            <div class="form-group">
                <label for="time_start">TIME START</label>
                <input class="form-control" id="time_start" type="time" name="t_start">
            </div>
            <div class="form-group">
                <label for="time_start">TIME END</label>
                <input class="form-control" id="time_start" type="time" name="t_end">
            </div>
        </div>
        <div class="grupo_date_time">
            <div class="form-group">
                <label for="fecha_start">DATE START</label>
                <input class="form-control" id="fecha_start" type="date" name="f_start">
            </div>
            <div class="form-group">
                <label for="fecha_start">DATE END</label>
                <input class="form-control" id="fecha_start" type="date" name="f_end">
            </div>
        </div>
        <div class="form-group file_form">
            <input type="file" class="update_file" id="customFile" name="file">
        </div>
        <div class="btn-group btn_form_add" >
             <button  class="btn btn-outline-info">Guardar <i class="far fa-save"></i></button>
           <button class="btn btn-outline-success button_file">   Archivo   <i class="fas fa-file-archive"></i></button>
        </div>
    </form>
</div>