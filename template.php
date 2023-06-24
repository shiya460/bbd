<?php
require_once('includes/fpdf/fpdf.php');
require_once('includes/fpdi/fpdi.php');


$pdf = new FPDI('L', 'pt');


$pdf->SetTopMargin(-160);
$pdf->SetLeftMargin(150);
$pdf->SetRightMargin(40);
$pdf->SetAutoPageBreak(0);

// Copy the template from the source file    
$pageCount = $pdf->setSourceFile('certificate.pdf');
$tplIdx = $pdf->importPage(1);
// Set the diemsion of the new PDF file
$pdf->addPage('L', [792, 612]);
$pdf->useTemplate($tplIdx);
// Set font
$pdf->AddFont('Roboto-Regular');
$pdf->SetFont('Roboto-Regular', '', 15);
// Set color
$pdf->SetTextColor(97, 101, 107);
// Move to 500 points from the top
$pdf->ln(500);
// Centeredtext
$pdf->Cell(0, 0, $name, 0, 1, 'C');
$pdf->Cell(40,34,$address,20,1,'L');
$pdf->Cell(0,-590,$ref,100,-100,'R');
$pdf->Output('D', 'certificate.pdf');