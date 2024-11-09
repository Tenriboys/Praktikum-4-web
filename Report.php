<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('pdf');
	}

	public function kustomerlap() {
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();
		$pdf->SetFont('Times', 'B', 18);
		$pdf->Cell(0, 5, 'LAPORAN DATA KUSTOMER', 0, 1, 'C');
		$pdf->Cell(30, 8, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(7, 6, 'NO', 1, 0, 'C');
		$pdf->Cell(37, 6, 'NIK', 1, 0, 'C');
		$pdf->Cell(37, 6, 'NAMA CUSTOMER', 1, 0, 'C');
		$pdf->Cell(30, 6, 'TELP', 1, 0, 'C');
		$pdf->Cell(45, 6, 'ALAMAT', 1, 1, 'C');
		$i = 1;
		$data = $this->db->get('kustomer')->result_array();
		foreach ($data as $d) {
			$pdf->SetFont('Times', '', 9);
			$pdf->Cell(7, 6, $i++, 1, 0);
			$pdf->Cell(37, 6, $d['nik'], 1, 0);
			$pdf->Cell(37, 6, $d['name'], 1, 0);
			$pdf->Cell(30, 6, $d['telp'], 1, 0);
			$pdf->Cell(45, 6, $d['alamat'], 1, 1);
		}
		$pdf->SetFont('Times', '', 10);
		$pdf->Output('laporan_customer.pdf', 'I');
	}
	public function headerlap()
	{
			$this->load->view('kustomer/report_header_only');
	}
}