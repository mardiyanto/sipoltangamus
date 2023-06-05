<?php
session_start();
if (empty($_SESSION['user']) AND empty($_SESSION['pass'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
error_reporting(0);

include "class.ezpdf.php";
include "../../config/koneksi.php";
include "rupiah.php";
  
$pdf = new Cezpdf();
 
// Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('fonts/Courier.afm');

$all = $pdf->openObject();

// Tampilkan logo
$pdf->setStrokeColor(0, 0, 0, 1);
$pdf->addJpegFromFile('logo.jpg',20,800,69);

// Teks di tengah atas untuk judul header
  $k=$_POST[tgl_mulai].'-'.$_POST[bln_mulai].'-'.$_POST[thn_mulai];
  $l=$_POST[tgl_selesai].'-'.$_POST[bln_selesai].'-'.$_POST[thn_selesai];
// Teks di tengah atas untuk judul header
$pdf->addText(190, 820, 16,'<b>Laporan Peminjaman Buku Harian</b>');
$pdf->addText(270, 800, 12,'<b>'.date( 'd-m-Y').'</b>');

// Garis atas untuk header
$pdf->line(10, 790, 578, 790);

// Garis bawah untuk footer
$pdf->line(10, 50, 578, 50);
// Teks kiri bawah
$pdf->addText(30,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

$pdf->closeObject();

// Tampilkan object di semua halaman
$pdf->addObject($all, 'all');

$sekarang=date('d-m-Y');

// Query untuk merelasikan kedua tabel di filter berdasarkan tanggal
$sql = mysql_query("SELECT tbl_transaksi.id as faktur,DATE_FORMAT(tgl_pinjam, '%d-%m-%Y') as tanggal,
                    judul,nim,nama,tgl_kembali
                    FROM tbl_transaksi 
                    WHERE (tbl_transaksi.status='Pinjam') 
                    AND (tbl_transaksi.tgl_pinjam='$sekarang')");
$jml = mysql_num_rows($sql);

if ($jml > 0){
$i = 1;
while($r = mysql_fetch_array($sql)){ 
  $faktur=$r[faktur];
  
  $data[$i]=array('<b>No</b>'=>$i, 
                  '<b>Faktur</b>'=>$faktur, 
                  '<b>Nama anggota</b>'=>$r[nama], 
                  '<b>Nik/Nis</b>'=>$r[nim], 
				  '<b>Judul Buku</b>'=>$r[judul], 
                  '<b>Tangal kembali</b>'=>$r[tgl_kembali]);

	$totqu = $totqu + $jml;
  $i++;
}

$pdf->ezTable($data, '', '', '');

$tot=rp($total);
$pdf->ezText("Jumlah yang Buku terpinjam : {$jml} unit");
$pdf->ezText("Jumlah keseluruhan yang Buku terpinjam: {$jml} unit");

// Penomoran halaman
$pdf->ezStartPageNumbers(320, 15, 8);
$pdf->ezStream();
}
else{
  $skrg=date('d-M-Y');
  echo "Tidak ada transaksi peminjaman pada Tanggal <b>$skrg</b><br /><br />
       <input type=button value=Kembali onclick=self.history.back()>";
}
}
?>
