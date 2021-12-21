<?php
include("header_pdf.php");

  function separar($valor){
      $iterator=0;
      $cadena='';
       for($i=strlen($valor); $i>=0;--$i){
          if($iterator==3){
            $cadena=$valor[$i-2].$valor[$i-1];
            return $cadena;
          }  

          $iterator++;
       }
  }
  function name_mes($valor){
      switch(intval($valor)){
          case 1:return "Enero";
          case 2:return "Febrero";
          case 3:return "Marzo";
          case 4:return "Abril";
          case 5:return "Mayo";
          case 6:return "Junio";
          case 7:return "Julio";
          case 8:return "Agosto";
          case 9:return "Septiembre";
          case 10:return "Octubre";
          case 11:return "Noviembre";
          case 12:return "Diciembre";
          default:return;
      }
  }


  $mes=name_mes($_GET['fecha']);

$consulta="SELECT * FROM actividades";
$result=mysqli_query($connect,$consulta);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Arial","U",20);
$ti='Mes de '.$mes;
$w=$pdf->GetStringWidth($ti)+6;
$pdf->Cell((90-$w)/2);
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
      
       if(separar($row['fecha_start'])==$_GET['fecha']&&$row['opcion']!='0'){
        $pdf->Cell(60,10,utf8_decode($row['nombre_act']),1,0,'C',0);
        $pdf->Cell(35,10,$row['fecha_start'],1,0,'C',0);
        $pdf->Cell(35,10,$row['fecha_end'],1,0,'C',0);
        $pdf->Cell(30,10,$row['hora_start'],1,0,'C',0);
        $pdf->Cell(30,10,$row['hora_start'],1,1,'C',0);
       }
    
   }

   
 
$pdf->Output("D","Actividad Realizada de $mes.pdf");
