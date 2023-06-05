<?php
// Bagian Home
if ($_GET[module]=='home'){
 echo"<div class='bs-docs-section'>
                      <div class='bs-glyphicons'>
                        <ul class='bs-glyphicons-list'>
				    ";
				
$kat=mysql_query(" SELECT COUNT( berita.id_berita ) as jlh, kategori.id_kategori, kategori.kategori FROM kategori LEFT JOIN berita ON berita.id_kat= kategori.id_kategori GROUP BY kategori.id_kategori ORDER BY jlh DESC ");
while($t=mysql_fetch_array($kat)){
$no++;
                          echo" <li><a href='xxx.php?module=cari&id_k=$t[id_kategori]'>
                            <span class='glyphicon glyphicon-asterisk' aria-hidden='true'></span>
                            <span class='glyphicon-class'>$t[kategori] ($t[jlh])</span></a>
                          </li>
                                  ";
}
  echo"
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>   ";
}
elseif ($_GET[module]=='artikel'){
	$con=mysql_query("SELECT * FROM berita order by id_berita ASC");
	while($ar=mysql_fetch_array($con)){
		$isi_berita6 = strip_tags($ar['isi']); 
                $isi6 = substr($isi_berita6,0,500); 
                $isi6 = substr($isi_berita6,0,strrpos($isi6," ")); 	
echo"
<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$ar[tanggal] - $ar[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $ar[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='berita-$t[id_berita]-$t[judul_seo].html' title='$t[judul]' rel='bookmark'>$ar[judul]</a></h2>
		  <div class='entry clearfix'>
	";
 		// Apabila ada gambar dalam berita, tampilkan
    if ($ar['gambar']!=''){
			echo "<a href='xxx.php?module=detail&id=$ar[id_berita]&id_k=$ar[id_kat]'><img width='200' height='133' src='foto/data/$ar[gambar]' class='alignleft featured_image wp-post-image' alt='$t[judul]' /></a>";
		}
    echo "<p align='justify'>$isi6</p>
         <div class='readmore'>
            <a href='xxx.php?module=detail&id=$ar[id_berita]&id_k=$ar[id_kat]' title='' rel='bookmark'>Read More</a>
        </div>
        </div></div>";
}

}


elseif ($_GET[module]=='cari'){
$kate2=mysql_query(" SELECT * FROM berita,kategori WHERE id_kat=id_kategori AND id_kat='$_GET[id_k]'");
$r=mysql_fetch_array($kate2); 
	echo"<form action='xxx.php?module=detailcari' method='post'>
	<div class='col-md-12 col-sm-12   form-group pull-right top_search'>
                  <div class='input-group'>
<input type='text' name='berdasarkan' class='form-control' value='$r[kategori]'>
                    <input type='text' name='cari' class='form-control' placeholder='Cari Hadis...'>
                    <span class='input-group-btn'>
					<input type='submit' name='submit' class='btn btn-secondary' value='CARI'> 
                 
                    </span>
                  </div>
                </div></form>";
}

elseif ($_GET[module]=='detailcari'){
if ((isset($_POST['submit'])) and ($_POST['cari']<>"")){
      $cari=$_POST['cari'];
      $berdasarkan=$_POST['berdasarkan'];
 $editktp = mysql_query("SELECT * FROM berita WHERE  $berdasarkan LIKE '%$cari%'");
    $rkp    = mysql_fetch_array($editktp);
	  $s=mysql_query("SELECT * FROM berita,kategori WHERE $berdasarkan LIKE '%$cari%' 
AND id_kat=id_kategori");

      $ada=mysql_numrows($s);
$no=1;
echo "Di temukan Ada $ada data";

if($ada > 0){
  while($d=mysql_fetch_array($s)){

	echo "
	<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$d[tanggal] - $d[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $d[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='xxx.php?module=detail&id=$d[id_berita]&id_k=$d[id_kat]' title='$d[judul]' rel='bookmark'>$d[judul]</a></h2>
		  <div class='entry clearfix'>";
		 if($d[gambar] !=0){echo" <a href='xxx.php?module=detail&id=$d[id_berita]&id_k=$d[id_kat]'>
		  <img width='300' height='172' src='foto/data/$d[gambar]' class='alignleft featured_image wp-post-image' alt='$d[judul]' /></a>";}else{echo"";}	

echo"
		  <p align='justify'>$d[isi]</p>
              </div></div>
	";
}
 
}else{
   
   echo"<div align='center'>Maaf, Data yang anda cari belum terdaftar</div>";
  }
}
}


elseif ($_GET[module]=='detail'){
$detail=mysql_query(" SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$d=mysql_fetch_array($detail); 

echo" <a href='xxx.php?module=kategori&id_k=$d[id_kat]' class='btn btn-info'>Kembali</a>
<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$d[tanggal] - $d[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $d[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='xxx.php?module=detail&id=$d[id_berita]&id_k=$d[id_kat]' title='$d[judul]' rel='bookmark'>$d[judul]</a></h2>
		  <div class='entry clearfix'>";
		 if($d[gambar] !=0){echo" <a href='xxx.php?module=detail&id=$d[id_berita]&id_k=$d[id_kat]'>
		  <img width='300' height='172' src='foto/data/$d[gambar]' class='alignleft featured_image wp-post-image' alt='$d[judul]' /></a>";}else{echo"";}	

echo"
		  <p align='justify'>$d[isi]</p>
              </div></div>";

}
elseif ($_GET[module]=='kategori'){
$kate2=mysql_query(" SELECT * FROM berita,kategori WHERE id_kat=id_kategori AND id_kat='$_GET[id_k]'");
$we=mysql_fetch_array($kate2);
  $p      = new Paging3;
  $batas  = 4;
  $posisi = $p->cariPosisi($batas); 		  
$kate=mysql_query(" SELECT * FROM berita WHERE id_kat='$_GET[id_k]' ORDER BY id_berita DESC LIMIT $posisi,$batas");
$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE id_kat='$_GET[id_k]'"));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

				

  $ada = mysql_num_rows($kate);
  
  if ($ada > 0) {
while ($ta=mysql_fetch_array($kate)){

                $isi_berita6 = strip_tags($ta['isi']); 
                $isi6 = substr($isi_berita6,0,500); 
                $isi6 = substr($isi_berita6,0,strrpos($isi6," ")); 
echo"
<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$ta[tanggal] - $ta[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $ta[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='xxx.php?module=detail&id=$ta[id_berita]&id_k=$ta[id_kat]' title='$ta[judul]' rel='bookmark'>$ta[judul]</a></h2>
		  <div class='entry clearfix'>
";
 		// Apabila ada gambar dalam berita, tampilkan
    if ($ta['gambar']!=''){
			echo "<a href='xxx.php?module=detail&id=$ta[id_berita]&id_k=$ta[id_kat]'><img width='200' height='133' src='foto/data/$ta[gambar]' class='alignleft featured_image wp-post-image' alt='$t[judul]' /></a>";
		}
    echo "<p align='justify'>$isi6</p>
         <div class='readmore'>
            <a href='xxx.php?module=detail&id=$ta[id_berita]&id_k=$ta[id_kat]' title='' rel='bookmark'>Read More</a>
        </div>
        </div></div>";
}
}else{
echo"<div id='detail-category'>
           <strong>TIDAK ADA DATA PADA KATEGORI INI</strong>
          </div>";

}
echo"<div class='cleaner_h10'></div>

<div align=center >$linkHalaman</div>";
		
	?>	  
<?php }
elseif ($_GET[module]=='hubungi'){ ?>
         <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Email</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i><?=$k[alias]?></p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Wa/HP</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i><?=$k[tahun]?></p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Alamat</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i><?=$k[alamat]?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15893.986799468783!2d103.9331618!3d-5.1843089!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4795a9a150ea55%3A0x8ab132fe6ff9eb45!2sPolres%20Pesisir%20Barat!5e0!3m2!1sid!2sid!4v1685945211156!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form action="xxx.php?module=kritik" method="post" >
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="nama" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                          
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" name="isi" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<?php }

elseif ($_GET[module]=='tentang'){ ?>
         <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Tentang <?=$k[nama]?></h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase"><?=$k[nama]?></span></h1>
                        <p class="mb-4"><?=$k[isi]?></p>

                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="tema/img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="tema/img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="tema/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="tema/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

<?php }
elseif ($_GET[module]=='galery'){ ?>
  <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">iNFORMASI UPDATE</h6>
                    <h1 class="mb-5">INFORMASI <span class="text-primary text-uppercase">TERKINI</span></h1>
                </div>
                <div class="row g-4">
                    <!-- BERITA Start -->
                    <?php $con=mysql_query("SELECT * FROM berita order by id_berita DESC ");
	while($ar=mysql_fetch_array($con)){
		$isi_berita6 = strip_tags($ar['isi']); 
                $isi6 = substr($isi_berita6,0,200); 
                $isi6 = substr($isi_berita6,0,strrpos($isi6," ")); 	 ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="foto/data/<?=$ar[gambar]?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Pos by admin</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?=$ar[judul]?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>dibaca : <?=$ar[dilihat]?> X</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?=$ar[tanggal]?> - <?=$ar[jam]?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3"><?=$isi6?></p>
                                <div class="d-flex justify-content-between">
                                    <a href='xxx.php?module=detail&id=<?=$ar[id_berita]?>&id_k=<?=$ar[id_kat]?>' class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div> <?php }?>
                     <!-- BERITA End -->
                    
                    
                </div>
            </div>
        </div>
        <!-- Room End -->

<?php }
elseif ($_GET[module]=='kritik'){
	  mysql_query("INSERT INTO kritik (nama, email, pesan) 
             VALUES('$_POST[nama]',
			 '$_POST[email]',
			 '$_POST[isi]')"); 
echo "<script>window.alert('terimakasih sudah mengunjungi aplikasi kami..... ');
        window.location=('index.php')</script>";
}
?>

