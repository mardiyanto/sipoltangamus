
<?php
include "../../config/koneksi.php";
$act=$_GET[act];
$date=date ('d/m/Y');
$time=date ('h:i A');
if($act=='inputkategori'){
if (empty($_POST[kat])){
 echo "<script>window.alert('Kategori masih kosong');
        window.location=('javascript:history.go(-1)')</script>";
     }else{
$lokasi_file=$_FILES[gambar][tmp_name];
if(empty($lokasi_file)){
mysql_query("insert into kategori (kategori) values ('$_POST[kat]')");  
echo "<script>window.location=('../index.php?aksi=kategori')</script>";
}else{
$tanggal=date("dmYhis");
$file=$_FILES['gambar']['tmp_name'];
$file_name=$_FILES['gambar']['name'];
copy($file,"../../foto/kategori/".$tanggal.".jpg");
mysql_query("insert into kategori (kategori,gambar_kat) values ('$_POST[kat]','$tanggal.jpg')");  
echo "<script>window.location=('../index.php?aksi=kategori')</script>";
   }
  } 
}

elseif($act=='editkategori'){
if (empty($_POST[kat])){
 echo "<script>window.alert('Kategori masih kosong');
        window.location=('javascript:history.go(-1)')</script>";
     }else{
$lokasi_file=$_FILES[gambar][tmp_name];
if(empty($lokasi_file)){
mysql_query("UPDATE kategori SET kategori='$_POST[kat]' WHERE id_kategori='$_GET[id_k]'");

echo "<script>window.location=('../index.php?aksi=kategori')</script>";
}else{
if($_GET[gb]==''){
$tanggal=date("dmYhis");
$file=$_FILES['gambar']['tmp_name'];
$file_name=$_FILES['gambar']['name'];
copy($file,"../../foto/kategori/".$tanggal.".jpg");
mysql_query("UPDATE kategori SET kategori='$_POST[kat]',gambar_kat='$tanggal.jpg' WHERE id_kategori='$_GET[id_k]'");
echo "<script>window.location=('../index.php?aksi=kategori')</script>";
}else{
$a=$_GET['gb'];
$file=$_FILES['gambar']['tmp_name'];
$file_name=$_FILES['gambar']['name'];
copy($file,"../../foto/kategori/".$a);
mysql_query("UPDATE kategori SET kategori='$_POST[kat]' WHERE id_kategori='$_GET[id_k]'");
echo "<script>window.location=('../index.php?aksi=kategori')</script>";
    }
   }
  } 
}

elseif($act=='hapus'){
mysql_query("DELETE FROM kategori WHERE id_kategori='$_GET[id_k]'"); 
echo "<script>window.location=('../index.php?aksi=kategori')</script>";
}

?>
