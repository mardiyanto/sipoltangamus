<?
///pemanggilan tabel calon_mhs
$k3=mysql_query("SELECT * FROM berita ");
$kk=mysql_num_rows($k3);

$k3=mysql_query("SELECT * FROM berita ");
$kk=mysql_num_rows($k3);

$agt=mysql_query("SELECT * FROM kategori ");
$agt=mysql_num_rows($agt);

$posting=mysql_query("SELECT SUM(id_berita)as b FROM berita");
$post=mysql_fetch_array($posting);
?>