<?php

include ("header_pdf.php");

$consulta="SELECT * FROM actividades";
$result=mysqli_query($connect,$consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Arial","U",20);
$ti='LISTA DE ACTIVIDADES PENDIENTES';
$w=$pdf->GetStringWidth($ti);
$pdf->Cell((150-$w)/2);
$pdf->Cell(0,10,$ti,0,0,"C");
$pdf->Ln(20);
 
$pdf->SetFont('Arial', 'B', 15);
       $pdf->SetFillColor(60,60,60);
       $pdf->SetTextColor(250,250,250);
    ///$pdf->Ln(5);
        $pdf->Cell(60,10,"Title",1,0,'C',true);
        $pdf->Cell(35,10,"Date Start",1,0,'C',true);
        $pdf->Cell(35,10,"Date End",1,0,'C',true);
        $pdf->Cell(30,10,"Time Start",1,0,'C',true);
        $pdf->Cell(30,10,"Time End",1,1,'C',true);
$pdf->SetFont('Arial', '', 11);
$pdf->SetTextColor(0,0,0);
   while($row=mysqli_fetch_assoc($result)){
      
       if($row['opcion']=='0'){
        $pdf->Cell(60,10,utf8_decode($row['nombre_act']),1,0,'C',0);
        $pdf->Cell(35,10,$row['fecha_start'],1,0,'C',0);
        $pdf->Cell(35,10,$row['fecha_end'],1,0,'C',0);
        $pdf->Cell(30,10,$row['hora_start'],1,0,'C',0);
        $pdf->Cell(30,10,$row['hora_start'],1,1,'C',0);
       }
    
   }


$pdf->Output("D","Pendientes_Actividades.pdf");
