<?php
include("header.php");
    
?>
<div class=" formulario_change visita_article container">
    <div class="d-flex flex-column">
        <div class="p-2 d-flex">
            <div class="p-2 bg-info flex-fill">PERSONAL</div>
            <a href="exportar_pdf/pdf_personal.php" class="btn btn-outline-success"><i class="fas fa-download"></i></a>
        </div>
        <div class="p-2 d-flex">
            <div class="p-2 bg-warning flex-fill">ACTIVIDADES PENDIENTES</div>
            <a href="exportar_pdf/pdf_pendientes.php" class="btn btn-outline-success"><i class="fas fa-download"></i></a>
        </div>
        <form action="exportar_pdf/pdf_realizadas.php" class="p-2 d-flex" method="get">
            <select name="fecha" class=" p-2 bg-primary flex-fill text-white">
                <option selected>ACTIVIDADES REALIZADAS</option>
                <option value="01">Enero</option>
                <option value="02">Febrero</option>
                <option value="03">Marzo</option>
                <option value="04">Abril</option>
                <option value="05">Mayo</option>
                <option value="06">Junio</option>
                <option value="07">Julio</option>
                <option value="08">Agosto</option>
                <option value="09">Setiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>
              <button class="btn btn-outline-success"><i class="fas fa-download"></i></button>
        </form>
    </div>

</div>