<?php

try
{

require_once("library/fpdf/fpdf.php");
$pdf = new FPDF('p','mm','A4');
$pdf ->AddPage();

//SET LIFE HEALTH CARE LOGO
$img = 'images/logo1.png';
$pdf->Cell(0, 0,'', 0, 1,'R',$pdf->Image($img));

//SET FONT HEADING
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,10,"Life Health CARE",1,1);
$pdf->Cell(100,10,"20 William Nicole Drive, ZA",1,1);
$pdf->Cell(100,10,"(+27) 519-0450",1,1);

//CONNECT TO DATABASE
require_once 'Connect_DB.php';

$queryInvoice = $PDOdb->prepare("SELECT * FROM invoice_info WHERE Client_id");
$queryInvoice->execute();
$invoices = $queryInvoice->fetch();


$pdf->Cell(100,10,"Invoice Number:{$invoices['INVNUM']}",0,0);
$pdf->Cell(100,10,"Date: {$invoices['Inv_date']}",0,1);

$pdf->SetFont('Arial','I',12);
 $ID = $pdf->Cell(50,10,"Client id:{$invoices['Client_id']}",0,1);
 echo $ID;

$pdf->Cell(50,10,"Consultation Fee: = {$invoices['Consultation']}",0,1);
$pdf->Cell(50,10,"Supplement one: = {$invoices['Suppl1']}",0,1);
$pdf->Cell(50,10,"Supplement two: = {$invoices['Suppl2']}",0,1);
$pdf->Cell(50,10,"Supplement three: = {$invoices['Suppl3']}",0,1);
$pdf->Cell(50,10,"Supplement four: = {$invoices['Suppl4']}",0,1);
$pdf->Cell(50,10,"Supplement five: = {$invoices['Suppl5']}",0,1);
$pdf->Cell(50,10,"Supplement six: = {$invoices['Suppl6']}",0,1);
$pdf->Cell(50,10,"Supplement seven: = {$invoices['Suppl7']}",0,1);

//INVOICE TABLE WITH COLUMNS 
$pdf->Cell(50,10,"Supplements",1,0);
$pdf->Cell(50,10,"Price",1,0);
$pdf->Cell(50,10,"Quantity",1,0);
$pdf->Cell(50,10,"Total",1,1);

//ROWS FOR EACH INVOICE INFORMATION
$pdf->Cell(50,10,"{$invoices['Suppl1']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price']}",1,0);
$pdf->Cell(50,10,"{$invoices['Quantity']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price_Supplement_1']}",1,1);
$pdf->Cell(50,10,"{$invoices['Suppl2']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price2']}",1,0);
$pdf->Cell(50,10,"{$invoices['Quantity2']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price_Supplement_2']}",1,1);
$pdf->Cell(50,10,"{$invoices['Suppl3']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price3']}",1,0);
$pdf->Cell(50,10,"{$invoices['Quantity3']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price_Supplement_3']}",1,1);
$pdf->Cell(50,10,"{$invoices['Suppl4']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price4']}",1,0);
$pdf->Cell(50,10,"{$invoices['Quantity4']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price_Supplement_4']}",1,1);
$pdf->Cell(50,10,"{$invoices['Suppl5']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price5']}",1,0);
$pdf->Cell(50,10,"{$invoices['Quantity5']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price_Supplement_5']}",1,1);
$pdf->Cell(50,10,"{$invoices['Suppl6']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price6']}",1,0);
$pdf->Cell(50,10,"{$invoices['Quantity6']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price_Supplement_6']}",1,1);
$pdf->Cell(50,10,"{$invoices['Suppl7']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price7']}",1,0);
$pdf->Cell(50,10,"{$invoices['Quantity7']}",1,0);
$pdf->Cell(50,10,"{$invoices['Price_Supplement_7']}",1,1);
$pdf->Cell(50,10,"Total Amount",1,0);
$pdf->Cell(50,10,'',1,0);
$pdf->Cell(50,10,'',1,0);
$pdf->Cell(50,10,'',1,0);                     


$pdf->Output();   
} catch (Exception $ex) {

}
?>