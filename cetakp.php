<?php
//koneksi ke database
mysql_connect("localhost","root","");
mysql_select_db("db_ikan");

//mengambil data dari tabel
$sql=mysql_query("SELECT t.id_transaksi, t.nama_pembeli, t.alamat, t.pakan, t.harga, t.jumlah, t.total FROM transaksip t order by id_transaksi asc");
$data = array();
while ($row = mysql_fetch_assoc($sql)) {
	array_push($data, $row);
}

//mengisi judul dan header tabel
$judul = "LAPORAN TRANSAKSI PEMESANAN PAKAN IKAN";
$header = array(
array("label"=>"TRANSAKSI", "length"=>20, "align"=>"L"),
array("label"=>"NAMA PEMBELI", "length"=>30, "align"=>"L"),
array("label"=>"ALAMAT", "length"=>30, "align"=>"L"),
array("label"=>"PAKAN IKAN", "length"=>40, "align"=>"L"),
array("label"=>"HARGA", "length"=>20, "align"=>"L"),
array("label"=>"JUMLAH", "length"=>20, "align"=>"L"),
array("label"=>"TOTAL", "length"=>30, "align"=>"L"),
);

//memanggil fpdf
require_once ("fpdf/fpdf.php");
$pdf = new FPDF;
$pdf->AddPage();

//tampilan Judul Laporan
$pdf->SetFont('Arial','B','16'); //Font Arial, Tebal/Bold, ukuran font 1
$pdf->Cell(0,20, $judul, '0', 1, 'C');

//Header Table
$pdf->SetFont('Arial','','9');
$pdf->SetFillColor(46, 139, 87); //warna dalam kolom header
$pdf->SetTextColor(255); //warna tulisan putih
$pdf->SetDrawColor(0, 100, 0); //warna border
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();

//menampilkan data table
$pdf->SetFillColor(245, 222, 179); //warna dalam kolom data
$pdf->SetTextColor(0); //warna tulisan hitam
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
$i = 0;
foreach ($baris as $cell) {
$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
$i++;
}
$fill = !$fill;
$pdf->Ln();
}

//output file pdf
$pdf->Output();
?>