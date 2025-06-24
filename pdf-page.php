<?php
require ("fpdf/fpdf.php");

$pdf = new FPDF();
$pdf -> addpage();

// Title section
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> SetFillColor(230,230,230);
$pdf -> Cell(0, 12, 'EXAMINATION INFORMATION SHEET', 1, 1, 'C', true);

// Student Information
$pdf -> SetFont('Arial', 'B', 12);
$pdf -> Cell(45, 8, 'Student Name:', 1, 0 , 'L');
$pdf -> Cell(75, 8, '', 1, 0 , 'L');
$pdf -> Cell(35, 8, 'Number:' , 'L');
$pdf -> Cell(35, 8, '', 1, 1 , 'L');

$pdf -> Cell(45, 8, 'Subject:', 1, 0, 'L');
$pdf -> Cell(75, 8, '', 1, 0, 'L');
$pdf -> Cell(35, 8, 'Date:', 1, 0, 'L');
$pdf -> Cell(35, 8, date('Y-m-d'), 1, 1, 'L');

// exam details
$pdf -> Cell(45, 8, 'Total Marks', 1, 0 , 'L');
$pdf -> Cell(75, 8, '', 1, 0 , 'L');
$pdf -> Cell(35, 8, 'Duration:', 1, 0 , 'L');
$pdf -> Cell(35, 8, '', 1, 1 , 'L');

$pdf ->Ln(5);


$pdf -> output();

?>