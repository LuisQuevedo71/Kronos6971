<?php
require_once('fpdf/fpdf.php');

class PDF extends FPDF
{
	function Header()
	{
		$this->SetFont("Arial", "B", 12);
		$this->Cell(80);
		$this->Cell(50,10, 'Reportes de Equipo', 0,0, 'C');
		$this->Ln(30);
		$this->Cell(32,10, 'codigo_pc', 1, 0, 'L', 0);
		$this->Cell(32,10, 'modelo', 1, 0, 'L', 0);
		$this->Cell(32,10, 'fecha_ingreso', 1, 0, 'L', 0);
		$this->Cell(32,10, 'statud', 1, 0, 'L', 0);
		$this->Cell(32,10, 'observacion', 1, 0, 'L', 0);
		$this->Cell(32,10, 'codigo_laboratorio', 1, 0, 'L', 0);
	}
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial', 'I',8);
		$this->Cell(0,10,utf8_decode('Pagina').$this->Pageno().'/{nb}',0,0,'C');
	}

	
}

require_once('reportes_equipo.php');
	$consulta="Select * From equipo";
	$resultado=$mysqli->query($consulta);

	$pdf=new PDF();
	$pdf->AliasNbPages();
	$pdf->Addpage();
	$pdf->SetFont('Arial', '', 16);


	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(32,50, $row['codigo_pc'],1,0,'L',0);
		$pdf->Cell(32,50, $row['modelo'],1,0,'L',0);
		$pdf->Cell(32,50, $row['fecha_ingreso'],1,0,'L',0);
		$pdf->Cell(32,50, $row['statud'],1,0,'L',0);
		$pdf->Cell(32,50, $row['observacion'],1,0,'L',0);
		$pdf->Cell(32,50, $row['codigo_laboratorio'],1,0,'L',0);
	}


$pdf->Output();

?>