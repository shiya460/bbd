<?php
require_once('includes/fpdf/fpdf.php');
require_once('includes/fpdi/fpdi.php');
//require "template.php";

$pdf1 = new FPDI('L', 'pt');


$pdf1->SetTopMargin(-146);
$pdf1->SetLeftMargin(-410);
$pdf1->SetRightMargin(0);
$pdf1->SetAutoPageBreak(0);

// Copy the template from the source file    
$pageCount1 = $pdf1->setSourceFile('certificate.pdf');
$tplIdx = $pdf1->importPage(1);
// Set the diemsion of the new PDF file
$pdf1->addPage('L', [792, 612]);
$pdf1->useTemplate($tplIdx);
// Set font
$pdf1->AddFont('Roboto-Regular');
$pdf1->SetFont('Roboto-Regular', '', 15);
// Set color
$pdf1->SetTextColor(97, 101, 107);
// Move to 500 points from the top
$pdf1->ln(500);
// Centered text
$pdf1->Cell(0, 0, $address, 0, 1, 'C');

$pdf1->Output('D', 'certificate.pdf');