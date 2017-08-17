<?php


error_reporting(0);

include('modelf.php');
$obj=new model();

//$i = $_SESSION['id'];

	//show_faculty
	
	$see=$obj->sel_fac();
	
   //display faculy
 if(isset($_REQUEST['fid']))
{
   $fid=$_REQUEST['fid'];
   
   $fac=$obj->sel($fid);
   $fp=$obj->selp($fid);
   
}  

 	
   //display subject
 if(isset($_REQUEST['sid']))
{
   $sid=$_REQUEST['sid'];
   
   $sub1=$obj->sub($sid);
   
}  

/*if(isset($_REQUEST['sap']))
{
	include('fpdf.php');

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Hello World!');
	$content = $pdf->Output();
    //'.../faculty/doc.pdf','F'
	echo "DONE";
}
*/
if(isset($_REQUEST['sap']))
{
   require 'pdfmyurl.php';                      // include the class

$pdf = new PDFmyURL ('WPD800-52238-40632-99528');      // initialize the class with your license
	
                                             // Now set some options, for example:
$pdf->SetPageSize('A4');                     // Set page format to A4
$pdf->SetPageOrientation('Portrait');        // Set page orientation to 'Portrait'
	
$pdf->CreateFromURL ('www.google.com');      // Convert the Google Homepage to PDF
$pdf->Display();     
}

?>