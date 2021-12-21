<?php
include("header_pdf.php");




$consulta="SELECT * FROM usuario";
$result=mysqli_query($connect,$consulta);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Arial","U",20);
$ti='PERSONAL DE TRABAJO';
$w=$pdf->GetStringWidth($ti)+6;
$pdf->Cell((90-$w)/2);
$pdf->Cell(0,10,$ti,0,0,"C");
$pdf->Ln(20);
 
$pdf->SetFont('Arial', 'B', 15);
       $pdf->SetFillColor(60,60,60);
       $pdf->SetTextColor(250,250,250);
    ///$pdf->Ln(5);
        $pdf->Cell(10,10,"id",1,0,'C',true);
        $pdf->Cell(40,10,"Nombre",1,0,'C',true);
        $pdf->Cell(60,10,"Apellido",1,0,'C',true);
        $pdf->Cell(30,10,"Usuario",1,0,'C',true);
        $pdf->Cell(50,10,"Cargo",1,1,'C',true);
$pdf->SetFont('Arial', '', 11);
$pdf->SetTextColor(0,0,0);

   while($row=mysqli_fetch_assoc($result)){

        $pdf->Cell(10,10,$row['id'],1,0,'C',0);
        $pdf->Cell(40,10,$row['nombre'],1,0,'C',0);
        $pdf->Cell(60,10,$row['apellidos'],1,0,'C',0);
        $pdf->Cell(30,10,$row['user'],1,0,'C',0);
        $pdf->Cell(50,10,$row['espe'],1,1,'C',0);
   }

   
 
$pdf->Output("D","Personal del Trabajo.pdf");
