<?php
require_once('fungsi_validasi.php');
$server = "localhost";
$username = "root";
$password = "";
$database = "a_lalulintas";
// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
$kontak_kami=mysql_query("SELECT * FROM profil WHERE id_profil='1'");
$k=mysql_fetch_array($kontak_kami);
$val = new Lokovalidasi;

?>
