<?php
$pdf = new FPDF('l', 'mm', 'A5');
$image1 = base_url() . "assets/img/logo_indihome_2.png";
$image2 = base_url() . "assets/img/logo_telkom.png";
// membuat halaman masuk
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 12);
// mencetak string 
$gambar = $pdf->Image($image2, 170, 4, 35);
$pdf->Cell(0, 7, '', 0, 1, 'C');
$gambar2 = $pdf->Image($image1, 85, 25, 35);
$pdf->Cell(0, 5, '', 0, 1, 'C');
$pdf->Cell(0, 5, '', 0, 1, 'C');
$pdf->Cell(0, 7, '', 0, 1, 'C');
$pdf->Cell(190, 5, 'Sentral Telekomunikasi Otomat', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 5, 'SIMPANG LIMUN', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'Jl. STM No.20 Medan', 0, 1, 'C');
$pdf->Cell(190, 7, '', 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, -7, 'Tanggal : ' . date('Y-m-d'), 0, 1, 'R');
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('d') . "-" . date('m') . "-" . date('Y');
$pdf->SetFont('Arial', '', 10);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->SetLineWidth(0);
$pdf->Line(10, 58, 198, 58);
$pdf->SetLineWidth(1);
$pdf->Line(10, 59, 198, 59);
$pdf->SetLineWidth(0);
$pdf->Ln(5);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(190, 30, 'Laporan Arsip Dokumen Masuk', 0, 1, 'C');
$pdf->Ln(-5);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(8, 6, 'ID', 1, 0, 'C');
$pdf->Cell(27, 6, 'No Arsip', 1, 0, 'C');
$pdf->Cell(30, 6, 'Kategori', 1, 0, 'C');
$pdf->Cell(33, 6, 'Keamanan Arsip', 1, 0, 'C');
$pdf->Cell(30, 6, 'Asal Dokumen', 1, 0, 'C');
$pdf->Cell(30, 6, 'Tanggal Doc', 1, 0, 'C');
$pdf->Cell(35, 6, 'Tanggal Doc Masuk', 1, 0, 'C');
$pdf->SetFont('Arial', '', 10);

$doku = $this->db->query("SELECT * FROM tb_dokumen_masuk")->result_array();
foreach ($doku as $dokumen) {
    $kateg = $this->db->query("SELECT * FROM tb_kategori_dokumen WHERE id_kategori = '$dokumen[id_kategori]' ")->row_array();
    $pdf->Ln(6);
    $pdf->Cell(8, 6, $dokumen['id_dokumen_masuk'], 1, 0, 'C');
    $pdf->Cell(27, 6, $dokumen['no_arsip'], 1, 0, 'C');
    $pdf->Cell(30, 6, $kateg['nama_kategori'], 1, 0, 'C');
    $pdf->Cell(33, 6, $dokumen['keamanan_arsip'], 1, 0, 'C');
    $pdf->Cell(30, 6, $dokumen['asal_dokumen'], 1, 0, 'C');
    $pdf->Cell(30, 6, $dokumen['tanggal_dokumen'], 1, 0, 'C');
    $pdf->Cell(35, 6, $dokumen['tanggal_dokumen_masuk'], 1, 0, 'C');
}
$pdf->Output();
