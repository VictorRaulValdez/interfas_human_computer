<?php 

include("../php/connect.php");

require('../pdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(15);
        // Título
        $this->Cell(1,10, 'GORE PUNO',0, 0, 'C');
        $this->Image("../img/logo_pdf.png",150,3,50,20);
        // Salto de línea
        $this->Ln(15);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('página') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}