<?php
///////////////////////////lihat/////////////////////////////////////////////
if($aksi=='home'){
echo"
 <div class='row'>
                   <div class='col-lg-12'>
			<div class='panel panel-default'>
                            <div class='panel-heading'>
                           Sambutan
                            </div>
                            <div class='panel-body'>                         
				<p>Selamat Datang Di halaman Admin, Silahkan Pilih menu untuk pengaturan data yang di butuhkan guna mendapatkan hasil yang maksimal sesuai keinginan.</p>
                            </div>
			</div>
                   </div>
</div>
<div class='row'>
                    <div class='col-xs-12'>
              <div class='panel panel-primary'>
			    <div class='box-header'>
				   <h3 class='box-title'>INFORMASI</h3>
                </div>
                <div class='box-header'>
				</div>
     <div class='box-body'>
                  <a href='index.php?aksi=profil' class='btn btn-app'>
                    <span class='badge bg-yellow'>3</span>
                    <i class='fa fa-bullhorn fa-5x'></i> Profil
                  </a>
				     <a href='index.php?aksi=kategori' class='btn btn-app'>
                    <span class='badge bg-red'>$agt</span>
                    <i class='fa fa-heart-o fa-5x'></i> kategori
                  </a>
                  <a href='index.php?aksi=artikel' class='btn btn-app'>
                    <span class='badge bg-green'>$kk</span>
                    <i class='fa fa-barcode fa-5x'></i>Data artikel
                  </a>
                  <a href='index.php?aksi=admin' class='btn btn-app'>
                    <span class='badge bg-purple'>1</span>
                    <i class='fa fa-users fa-5x'></i> admin
                  </a>
          
               
            
            </div>
			</div>
 </div>
			</div>
";
}
///////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='kategori'){
echo"
<div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
			Data Kategori Artikel
                        </div>
                        <div class='panel-body'>
                            <ul class='nav nav-pills'>
                                <li class='active'><a href='#home-pills' data-toggle='tab'>Data Kategori</a>
                                </li>
                                <li><a href='#profile-pills' data-toggle='tab'>Input Kategori</a>
                                </li>
                               
                            </ul>

                            <div class='tab-content'>
                                <div class='tab-pane fade in active' id='home-pills'>
                                    <h4>Data Kategori </h4>
                                   
				   <div class='panel-body'>
                            <div class='table-responsive'>
                                <table id='example1' class='table table-bordered table-striped'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
				    ";
				$tebaru=mysql_query(" SELECT * FROM kategori ORDER BY id_kategori DESC ");
while ($t=mysql_fetch_array($tebaru)){
              
$no++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>	       <div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[kategori]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editkategori&id_k=$t[id_kategori]'>edit</a></li>
                        <li><a href='master/kategori.php?id_k=$t[id_kategori]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $d[kategori] ?')\">hapus</a></li>
                      </ul>
                    </div></td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
				 </div>
				 
				 
                                <div class='tab-pane fade' id='profile-pills'>
                                    <h4>Input Kategori</h4>
                                   
<form id='form1' method='post' enctype='multipart/form-data' action='master/kategori.php?act=inputkategori'>
         <div class='form-grup'>
        <label>Nama </label>
        <input type='text' class='form-control'  name='kat'/><br>
		<label>Gambar</label>
        <input type='file' class='smallInput' size='50'name='gambar'/><br>
		
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> 
    </form>  

				</div></div>
                            </div>
                        </div>
                    </div>
           
";}

elseif($aksi=='editkategori'){
$tebaru=mysql_query(" SELECT * FROM kategori WHERE id_kategori=$_GET[id_k] ");
$t=mysql_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>EDIT
                        </div>
                        <div class='panel-body'>
<form id='form1'  method='post' enctype='multipart/form-data' action='master/kategori.php?act=editkategori&id_k=$_GET[id_k]&gb=$t[gambar]'>
       <div class='form-grup'>
        <label>Nama </label>
        <input type='text' class='form-control' value='$t[kategori]' name='kat'/><br>
		<label>Gambar</label>
        <input type='file' class='smallInput' size='50'name='gambar'/><br><br />";
		if($t[gambar]!=0){echo"
		<img src='../foto/kategori/$t[gambar]' width='150' />";}
            echo"</br><a href='index.php?aksi=kategori' class='btn btn-default' data-dismiss='modal'>kembali</a>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form></div> </div></div> </div></div> </div>
";	
}
///////////////////////////////////////////////////////////////////////////////////////////////////

elseif($aksi=='editartikel'){
$tebaru=mysql_query(" SELECT * FROM berita WHERE id_berita=$_GET[id_b]");
$t=mysql_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
			 <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI ARTIKEL
                        </div>
                        <div class='panel-body'>

<form id='form1' enctype='multipart/form-data' method='post' action='master/artikel.php?act=editberita&id_b=$_GET[id_b]&gb=$t[gambar]'>
       <div class='form-grup'>
        <label>Kategori</label>
		    <select class='smallInput' name='kat'>";

             $tampil=mysql_query("SELECT * FROM kategori ORDER BY kategori");
          if ($t[id_kat]==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($t[id_kat]==$w[id_kategori]){
              echo "<option value=$w[id_kategori] selected>$w[kategori]</option>";
            }
            else{
              echo "<option value=$w[id_kategori]>$w[kategori]</option>";
            }
          }

    echo "</select><br>
    	<label>Judul</label>
        <input type='text'  value='$t[judul]' name='jd' class='form-control'/><br>
		<label>Isi</label>
       <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
			<label>Gambar</label>
        <input type='file' class='smallInput' size='50'name='gambar'/><br><br />";
		if($t[gambar]!=0){echo"
		<img src='../foto/data/$t[gambar]' width='150' />";}
            echo"

            <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form>
    </div></div></div></div></div></div>
";
}
////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='viewartikel'){
$detail=mysql_query(" SELECT * FROM berita WHERE id_berita='$_GET[id_b]'");
$d=mysql_fetch_array($detail); 
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI ARTIKEL
                        </div>
                        <div class='panel-body'>
<a href='index.php?aksi=artikel' title='Edit' class='btn btn-info'>kembali</a>			
     
<a href='index.php?aksi=editartikel&id_b=$d[id_berita]' title='Edit' class='btn btn-info'>EDIT</a>

<a href='master/artikel.php?id_b=$d[id_berita]&act=hapus&gbr=$d[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $d[judul] ?')\" title='Hapus' class='btn btn-info'>HAPUS</a><br /><br />	    	  
 <h4>$d[judul]</h4><em>$d[tanggal] - $d[jam]</em><br />
    ";
if($d[gambar] !=0){echo"<img src=../foto/data/$d[gambar]  class=box-shadow2 width=200 height=130 align='left'/>";}else{echo"";}
echo"$d[isi]</div></div></div></div></div></div>";
}

elseif($aksi=='artikel'){
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI 
                        </div>
						  <div class='box-header'>
				<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data
                            </button>
						<div class='btn btn-info' >
                              artikel :$kk
                            </div>	
				</div>
                        <div class='panel-body'>	

                            <div class='table-responsive'>
                               <table id='example1' class='table table-bordered table-striped'>
<thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
				    ";
$tebaru=mysql_query(" SELECT * FROM berita,kategori WHERE id_kat=id_kategori ORDER BY id_berita DESC ");
while ($t=mysql_fetch_array($tebaru)){
$no++;  
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[judul]</td>
                                            <td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[kategori]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editartikel&id_b=$t[id_berita]'>edit</a></li>
						<li><a href='index.php?aksi=viewartikel&id_b=$t[id_berita]'>view</a></li>
                        <li><a href='master/artikel.php?id_b=$t[id_berita]&act=hapus&gbr=$t[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[judul] ?')\">hapus</a></li>
                      </ul>
                    </div></td>
                                        </tr>                                      
                                    </tbody>";
}
                               echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
	 </div>

	  </div>";			

////////////////input admin			

echo"			

<div class='col-lg-12'>

                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>

                                <div class='modal-dialog'>

                                    <div class='modal-content'>

                                        <div class='modal-header'>

                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>

                                            <h4 class='modal-title' id='H3'>Input Data</h4>

                                        </div>

                                        <div class='modal-body'>
<form id='form1' enctype='multipart/form-data' method='post' action='master/artikel.php?act=inputberita'>
			<div class='form-group'>
       <label>Kategori</label>
		    <select class='form-control' name='kat'>
        	<option value=0 selected>----- Pilih Kategori -----</option>";
            $tampil=mysql_query("SELECT * FROM kategori ORDER BY kategori");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_kategori]>$r[kategori]</option>";
            }
              
        echo "</select><br>
    	<label>Judul</label>
        <input type='text' class='form-control' name='jd'/><br>
		<label>Isi</label>
        <textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
	
    	<label>Gambar</label>
        <input type='file' class='smallInput' size='50'name='gambar'/><br><br />
            <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form>

                                    </div>

                                </div>

                            </div>

                    </div>

		    </div>			

			

"; 

}

elseif($aksi=='kritik'){
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI kritik
                        </div>
						  <div class='box-header'>
				</div>
                        <div class='panel-body'>	

                            <div class='table-responsive'>
                               <table id='example1' class='table table-bordered table-striped'>
<thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
				    ";
$tebaru=mysql_query(" SELECT * FROM kritik  ORDER BY id_kritik DESC ");
while ($t=mysql_fetch_array($tebaru)){
$no++;  
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[nama]</td>
                                            <td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[email]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
						<li><a href='index.php?aksi=viewkritik&k=$t[id_kritik]'>view</a></li>
                       </ul>
                    </div></td>
                                        </tr>                                      
                                    </tbody>";
}
                               echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
	 </div>
	  </div>";			
}
elseif($aksi=='viewkritik'){

$tebaru=mysql_query(" SELECT * FROM kritik WHERE id_kritik=$_GET[k] ");

$t=mysql_fetch_array($tebaru);

echo"<div class='row'>

                <div class='col-lg-12'>

                    <div class='panel panel-default'>

                        <div class='panel-heading'>$t[nama]

                        </div>

                        <div class='panel-body'>

		

<a href='javascript:history.go(-1)' class='btn btn-info'> Kembali</a></div>

";


echo"$t[pesan] </div></div></div></div></div>";

}
////////////////////////////////////////////////////////////////////////////////////

elseif($aksi=='profil'){
echo"			
	<div class='row'>
	 <div class='col-xs-12'>
              <div class='panel panel-primary'>
			    <div class='box-header'>
				   <h3 class='box-title'>INFORMASI PROFIL</h3>
                </div>
                <div class='box-header'>
				</div>
                             <div class='box-body'>
		<div class='table-responsive'>		
	 <table id='example1' class='table table-bordered table-striped'>
	 <thead> 
	 <tr>
                                            <th>No</th>
                                            <th>Profil</th>
                                        </tr>
                                    </thead>
				   <tbody> ";
				$tebaru=mysql_query(" SELECT * FROM profil ORDER BY id_profil DESC ");
while ($t=mysql_fetch_array($tebaru)){
                $isi_berita = strip_tags($t['isi']); 
                $isi = substr($isi_berita,0,70); 
                $isi = substr($isi_berita,0,strrpos($isi," ")); 
				if($t[aktif]=='Y'){$mk='<strong>Tampil</strong>';}else{$mk='Tidak';}
$no++;    
                                    echo"
                                        <tr>
                                            <td>$no</td>
                                            <td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[nama]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editprofil&id_p=$t[id_profil]'>edit</a></li>
						<li><a href='index.php?aksi=viewprofil&id_p=$t[id_profil]'>view</a></li>
                        </ul>
                    </div></td>
                                       </tr>                                      
                                    ";
}
                                echo"</tbody></table>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>		
	 </div>
	  </div>	
	";
}



/////////////////////////////////////////////////////////////////////////////////////////////////

elseif($aksi=='editprofil'){

$tebaru=mysql_query(" SELECT * FROM profil WHERE id_profil=$_GET[id_p] ");

$t=mysql_fetch_array($tebaru);

echo"

<div class='row'>

                <div class='col-lg-12'>

                    <div class='panel panel-default'>

                        <div class='panel-heading'>EDIT PROFIL

                        </div>

                        <div class='panel-body'>

			

<form id='form1'  method='post' action='master/profil.php?act=editpro&id_p=$_GET[id_p]'>

       

       <div class='form-grup'>

        <label>Nama</label>

        <input type='text' class='form-control' value='$t[nama]' name='jd'/><br>

		<label>Email</label>

        <input type='text' class='form-control' value='$t[alias]' name='alias'/><br>

		<label>No/Wa</label>

        <input type='text' class='form-control' value='$t[tahun]' name='tahun'/><br>

		<label>Alamat</label>

        <input type='text' class='form-control' value='$t[alamat]' name='alamat'/><br>

		<label>Isi</label>

        <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi]</textarea></br>

		<script>CKEDITOR.replace('text-ckeditor');</script>

    	<div class='modal-footer'>

                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                                            <button type='submit' class='btn btn-primary'>Save </button>

                                        </div> </div>

    </form></div> </div></div> </div></div> </div>

";

}



elseif($aksi=='viewprofil'){

$tebaru=mysql_query(" SELECT * FROM profil WHERE id_profil=$_GET[id_p] ");

$t=mysql_fetch_array($tebaru);

echo"<div class='row'>

                <div class='col-lg-12'>

                    <div class='panel panel-default'>

                        <div class='panel-heading'>$t[nama]

                        </div>

                        <div class='panel-body'>

		

<a href='javascript:history.go(-1)' class='btn btn-info'> Kembali</a></div>

";

if($t[aktif] =='Y'){echo"<img src=../foto/foto_profil/$t[foto]  class=box-shadow2 width=50% /><br /><br />";}

echo"$t[isi] </div></div></div></div></div>";

}



elseif($aksi=='admin'){

			

echo"<div class='row'>

                <div class='col-lg-12'>

		

			

                    <div class='panel panel-default'>

                        <div class='panel-heading'>INFORMASI 

                        </div>

                        <div class='panel-body'>	

			<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>

                                Tambah Data Admin

                            </button>

                           	<div class='table-responsive'>		
	 <table id='example1' class='table table-bordered table-striped'>

                                    <thead>

                                        <tr>

                                            <th>nama</th>
                                            <th>User</th>		  

                                        </tr>

                                    </thead>

				    ";

				

$tebaru=mysql_query(" SELECT * FROM users ");

while ($t=mysql_fetch_array($tebaru)){	

$no++;

                                    echo"<tbody>

                                        <tr>

                                            <td>$t[nama_lengkap]</td>

							<td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[username]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editadmin&id=$t[id]' title='Edit'><i class='fa fa-pencil'></i>edit</a></li>
						<li><a href='master/admin.php?id=$t[id]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama_lengkap] ?')\" title='Hapus'><i class='fa fa-remove'></i>hapus</li>
                        </ul>
                    </div></td>



					   

                                        </tr>

                                       

                                    </tbody>";

}

                                echo"</table>

                            </div>

                        </div>

                    </div>

                </div>

                

            </div>		

	 </div>

	  </div>";			

			

////////////////input admin			

			

			

echo"			

<div class='col-lg-12'>

                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>

                                <div class='modal-dialog'>

                                    <div class='modal-content'>

                                        <div class='modal-header'>

                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>

                                            <h4 class='modal-title' id='H3'>Input Data Guru</h4>

                                        </div>

                                        <div class='modal-body'>

                                           <form role='form' method='post' action='master/admin.php?act=inputadmin'>

                                            <div class='form-group'>

                                            <label>Nama Lengkap</label>

						 <input type='text' class='form-control' name='nm'/><br>

			

						<label>Email</label>

						<input type='text' class='form-control' name='em'/><br>

		

						<label>User Name</label>

						 <input type='text' class='form-control'  name='um'/><br>

			

						<label>Password</label>

						<input type='text' class='form-control'  name='pw'/><br><br />

		

	

                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                                            <button type='submit' class='btn btn-primary'>Save </button>

                                        </div>

					</form>

                                    </div>

                                </div>

                            </div>

                    </div>

		    </div>			

			

"; 

}



/////////////////////////////////////////////////////////////////////////////////////////////////

elseif($aksi=='editadmin'){

$tebaru=mysql_query(" SELECT * FROM users WHERE id=$_GET[id]");

$t=mysql_fetch_array($tebaru);

echo"

<div class='col-lg-6'>

      <h4 class='modal-title' id='H3'>Edit Data Admin</h4>

 

    <div class='modal-body'>

<form id='form1'  method='post' action='master/admin.php?act=editadmin&id=$t[id]'>

    

     

    	<label>Nama Lengkap</label>

        <input type='text' class='form-control'  name='nm' value='$t[nama_lengkap]'/>

	

	

	<label>Email</label>

        <input type='text' class='form-control' name='em' value='$t[email]' />

	

	

	

	<label>User Name</label>

        <input type='text' class='form-control'  name='um' value='$t[username]'/>

        

	

	<label>Password</label>

        <input type='text' class='form-control'  name='pw'/> </br>

	

	 <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

          <button type='submit' class='btn btn-primary'>Save </button>

    </form>  

      </div></div></div></div>

";

}





elseif($aksi=='terimamhs'){

	

	mysql_query("UPDATE calon_mhs SET status='$_POST[status]' WHERE no_daftar='$_GET[no_daftar]'");

	

echo "<script>window.alert('Data berhasil disimpan terimakasih..... ');

        window.location=('index.php?aksi=pendaftaran')</script>";

	

}







elseif($aksi=='pinjam'){

echo"



<div class='row'>

<div class='col-xs-12'>

              <div class='panel panel-primary'>

			    <div class='box-header'>

				   <h3 class='box-title'>INFORMASI DATA TRANTSAKSI BUKU</h3>

                </div>

                <div class='box-header'>

					<a href='master/export_psb.php' class='btn btn-info'>

                                Export Data 

				</a>

				</div>

                             <div class='box-body'>

		<div class='table-responsive'>		

	 <table id='example1' class='table table-bordered table-striped'>

                                    <thead>

<tr>

                                          <th align='center' width='5%' >No</th>

   	            <th width='25%'>Judul Buku</th>

   	            <th width='25%'>Peminjam</th>

   	            <th width='15%'>Tgl Pinjam</th>

   	            <th width='15%'>Tgl Kembali</th>

                <th width='10%'>Terlambat</th>

                <th width='10%'>Kembali</th>

                <th width='10%'>Perpanjang</th>

                                   </tr></thead>

                    <tbody>";

				    

						$data=mysql_query("SELECT * FROM tbl_transaksi WHERE status='Pinjam' ORDER by id");

						while($p=mysql_fetch_array($data)){

									$no++;



                                        echo"<tr>

                                            <td>$no</td>

                                            <td>$p[judul]</td>

                                            <td>$p[nama]</td>

                                            <td>$p[tgl_pinjam]</td>

											<td>$p[tgl_kembali]</td>

											<td>";

					$tgl_dateline=$p['tgl_kembali'];

					$tgl_kembali=date('d-m-Y');

					$lambat=terlambat($tgl_dateline, $tgl_kembali);

					$denda=$lambat*$denda1;

					if ($lambat>0) {

						echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";

					}

					else {

						echo $lambat." hari";

					} echo" </td>

					<td><a href='index.php?aksi=transaksibukukembali&id=$p[id]&judul=$p[judul]'>kembali</a></td>

					<td><a href='index.php?aksi=transaksibukukembali&id=$p[id]&judul=$p[judul]'>perpaanjang</a></td>

                                      </tr>



                                        



                                    ";

						}

						

                                echo"</tbody></table>

                           </div>

                        </div>



			</div>

</div>

</div></div>

";







}







elseif($aksi=='transaksi'){

echo"



<div class='row'>

<div class='col-xs-12'>

              <div class='panel panel-primary'>

			    <div class='box-header'>

				   <h3 class='box-title'>INFORMASI DATA TRANTSAKSI BUKU</h3>

                </div>

                <div class='box-header'>

					<a href='master/export_psb.php' class='btn btn-info'>

                                Export Data

				</a>

				</div>

                             <div class='box-body'>

		<div class='table-responsive'>		

	<table id='example1' class='table table-bordered table-striped'>

                                    <thead>

<tr>

                                          <th align='center' width='5%' >No</th>

   	            <th width='25%'>Judul Buku</th>

   	            <th width='25%'>Peminjam</th>

   	            <th width='15%'>Tgl Pinjam</th>

   	            <th width='15%'>Tgl Kembali</th>

                

                                   </tr></thead>

                    <tbody>";

				    

						$data=mysql_query("SELECT * FROM tbl_transaksi  ORDER by id");

						while($p=mysql_fetch_array($data)){

									$no++;



                                        echo"<tr>

                                            <td>$no</td>

                                            <td>$p[judul]</td>

                                            <td>$p[nama]</td>

                                            <td>$p[tgl_pinjam]</td>

											<td>$p[tgl_kembali]</td>

											

                                      </tr>



                                        



                                    ";

						}

						

                                echo"</tbody></table>

                           </div>

                        </div>



			</div>

</div>

</div></div>

";

}



elseif($aksi=='kembalibuku'){

echo"



<div class='row'>

<div class='col-xs-12'>

              <div class='panel panel-primary'>

			    <div class='box-header'>

				   <h3 class='box-title'>INFORMASI DATA TRANTSAKSI BUKU</h3>

                </div>

                <div class='box-header'>

					<a href='master/export_psb.php' class='btn btn-info'>

                                Export Data

				</a>

				</div>

                             <div class='box-body'>

		<div class='table-responsive'>		

	 <table id='example1' class='table table-bordered table-striped'>

                                    <thead>

<tr>

                                          <th align='center' width='5%' >No</th>

   	            <th width='25%'>Judul Buku</th>

   	            <th width='25%'>Peminjam</th>

   	          

   	            <th width='15%'>Tgl Kembali</th>

               

               

                                   </tr></thead>

                    <tbody>";

				    

						$data=mysql_query("SELECT * FROM tbl_transaksi WHERE status='Kembali' ORDER by id");

						while($p=mysql_fetch_array($data)){

									$no++;



                                        echo"<tr>

                                            <td>$no</td>

                                            <td>$p[judul]</td>

                                            <td>$p[nama]</td>

                                          

											<td>$p[tgl_kembali]</td>

											

				

                                      </tr>



                                        



                                    ";

						}

						

                                echo"</tbody></table>

                           </div>

                        </div>



			</div>

</div>

</div></div>

";







}



elseif($aksi=='buku'){

			

echo"<div class='row'>

                <div class='col-lg-12'>

		

			

                    <div class='panel panel-default'>

                        <div class='panel-heading'>INFORMASI 

                        </div>

						  <div class='box-header'>

				<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>

                                Tambah Data Buku

                            </button>

						<div class='btn btn-info' >

                              STOK BUKU :$post[b]

                            </div>	

				</div>

                        <div class='panel-body'>	

			

                            <div class='table-responsive'>

                               <table id='example1' class='table table-bordered table-striped'>

                                    <thead>

<tr>

                                           <th align='center' width='5%' >No</th>

   	            <th width='30%'>Judul Buku</th>

   	            <th width='20%'>Pengarang</th>

   	            <th width='15%'>Penerbit</th>

   	            <th width='15%'>Jumlah</th>

             

					  

					    <th>Pilihan</th>

                                        </tr>

                                    </thead><tbody>

				    ";

				

$tebaru=mysql_query(" SELECT * FROM tbl_buku ORDER by judul ");

while ($t=mysql_fetch_array($tebaru)){	

$no++;

                                    echo"

                                        <tr>

                                            <td>$no</td>

                                            <td>$t[judul]</td>

							<td>$t[pengarang]</td>

							<td >$t[penerbit]</td>

							<td >$t[jumlah_buku]</td>

					    <td>

				<center>

				<a href='index.php?aksi=editbuku&id_buku=$t[id_buku]' title='Edit'><i class='fa fa-pencil'></i></a>&nbsp;

				<a href='master/buku.php?id_buku=$t[id_buku]&act=hapus&gbr=$t[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[judul] ?')\" title='Hapus'><i class='fa fa-remove'></i>&nbsp;

				<a href='index.php?aksi=editbuku&id=$t[id]' title='lihat'><i class='fa  fa-external-link-square'></i>

				</center></td>

                                        </tr>

                                       

                                  ";

}

                                echo"</tbody></table>

                            </div>

                        </div>

                    </div>

                </div>

                

            </div>		

	 </div>

	  </div>";			

////////////////input admin			

echo"			

<div class='col-lg-12'>

                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>

                                <div class='modal-dialog'>

                                    <div class='modal-content'>

                                        <div class='modal-header'>

                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>

                                            <h4 class='modal-title' id='H3'>Input Data</h4>

                                        </div>

                                        <div class='modal-body'>

                                           <form role='form' enctype='multipart/form-data' method='post' action='master/buku.php?act=inputbuku'>

                                            <div class='form-group'>

                                            <label>Judul Buku</label>

						 <input type='text' class='form-control' name='judul'/><br>

			

						<label>Pengarang Buku</label>

						<input type='text' class='form-control' name='pengarang'/><br>

		

						<label>Penerbit Buku</label>

						 <input type='text' class='form-control'  name='penerbit'/><br>

			

						<label>Tahun Terbit</label>

						<input type='text' class='form-control'  name='thn_terbit'/><br>

						

						<label>Kode ISBN/BUKU</label>

						<input type='text' class='form-control'  name='isbn'/><br>

						

						<label>Jumlah Buku</label>

						<input type='text' class='form-control'  name='jumlah_buku'/><br>

						

						<label>Tempat/Rak Buku</label>

						<input type='text' class='form-control'  name='lokasi'/><br>

						

						<label>Gambar</label>

						<input type='file' class='smallInput' size='50' name='gambar'/><br>

						<label>FILE BUKU</label>

						<input type='file' class='smallInput' size='50' name='data_upload'/><br>

						

						<br />

		

	

                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                                            <button  name='btnUpload'  type='submit' class='btn btn-primary'>Save </button>

                                        </div>

					</form>

                                    </div>

                                </div>

                            </div>

                    </div>

		    </div>			

			

"; 

}





elseif($aksi=='editbuku'){

$tebaru=mysql_query(" SELECT * FROM tbl_buku WHERE id_buku=$_GET[id_buku]");

$t=mysql_fetch_array($tebaru);

echo"

<div class='row'>

                <div class='col-lg-12'>

			 <div class='panel panel-default'>

                        <div class='panel-heading'>INFORMASI BUKU

                        </div>

                        <div class='panel-body'>



<form id='form1' enctype='multipart/form-data' method='post' action='master/buku.php?act=editbuku&id_buku=$_GET[id_buku]&gb=$t[gambar]'>

       <div class='form-grup'>

    	<label>Judul buku</label>

        <input type='text'  value='$t[judul]' name='judul' class='form-control'/><br>

		

		<label>Pengarang Buku</label>

						<input type='text' class='form-control' value='$t[pengarang]' name='pengarang'/><br>

		

						<label>Penerbit Buku</label>

						 <input type='text' class='form-control'  value='$t[penerbit]' name='penerbit'/><br>

			

						<label>Tahun Terbit</label>

						<input type='text' class='form-control'  value='$t[thn_terbit]' name='thn_terbit'/><br>

						

						<label>Kode ISBN/BUKU</label>

						<input type='text' class='form-control' value='$t[isbn]' name='isbn'/><br>

						

						<label>Jumlah Buku</label>

						<input type='text' class='form-control'  value='$t[jumlah_buku]' name='jumlah_buku'/><br>

						

						<label>Tempat/Rak Buku</label>

						<input type='text' class='form-control' value='$t[lokasi]' name='lokasi'/><br>

						

        <input type='file' class='smallInput' size='50'name='gambar'/><br><br />";

		if($t[gambar]!=0){echo"

		<img src='../foto/data/$t[gambar]' width='150' />";}

            echo"



            <div class='modal-footer'>

                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                                            <button type='submit' class='btn btn-primary'>Save </button>

                                        </div> </div>

    </form>

    </div></div></div></div></div></div>

";

}



elseif($aksi=='anggota'){

			

echo"<div class='row'>

                <div class='col-lg-12'>

		

			

                    <div class='panel panel-default'>

                        <div class='panel-heading'>INFORMASI 

                        </div>

						  <div class='box-header'>

				</div>

                        <div class='panel-body'>	

			

                            <div class='table-responsive'>

                               <table id='example1' class='table table-bordered table-striped'>

                                    <thead>

<tr>

                                           <th align='center'>No</th>

   	            <th >Nim</th>

   	            <th >Nama</th>

   	            <th >Tempat lahir</th>

   	            <th >Jurusan</th>

             

					  

					    <th>Pilihan</th>

                                        </tr>

                                    </thead><tbody>

				    ";

				

$tebaru=mysql_query(" SELECT * FROM  tbl_anggota ORDER by nim ");

while ($t=mysql_fetch_array($tebaru)){	

$no++;

                                    echo"

                                        <tr>

                                            <td>$no</td>

                                            <td>$t[nim]</td>

							<td>$t[nama]</td>

							<td >$t[tempat_lahir],$t[tgl_lahir]</td>

							<td >$t[jurusan]</td>

					    <td>

				<center>

				<a href='index.php?aksi=editangota&id_agt=$t[id_agt]' title='Edit'><i class='fa fa-pencil'></i></a>&nbsp;

				<a href='master/anggota.php?id_agt=$t[id_agt]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[judul] ?')\" title='Hapus'><i class='fa fa-remove'></i>&nbsp;

				</center></td>

                                        </tr>

                                       

                                  ";

}

                                echo"</tbody></table>

                            </div>

                        </div>

                    </div>

                </div>

                

            </div>		

	 </div>

	  </div>";			



}



elseif($aksi=='editangota'){

$tebaru=mysql_query(" SELECT * FROM tbl_anggota WHERE id_agt=$_GET[id_agt]");

$t=mysql_fetch_array($tebaru);

 $tgl=date ('d/m/Y');

echo"

<div class='row'>

                <div class='col-lg-12'>

			 <div class='panel panel-default'>

                        <div class='panel-heading'>INFORMASI BUKU

                        </div>

                        <div class='panel-body'>



<form id='form1' enctype='multipart/form-data' method='post' action='master/anggota.php?act=editanggota&id_agt=$_GET[id_agt]'>

       <div class='form-grup'>

    	<label>Nama</label>

        <input type='text'  value='$t[nama]' name='nama' class='form-control'/><br>

		

		<label>NPM</label>

						<input type='text' class='form-control' value='$t[nim]' name='nim'/><br>

		

						<label>Jenis Kelamin</label>

						 <input type='text' class='form-control'  value='$t[jk]' name='jk'/><br>

			

						<label>tempat_lahir</label>

						<input type='text' class='form-control'  value='$t[tempat_lahir]' name='lahir'/><br>

						

						<label>Tagal_lahir</label>

						<input type='text' class='form-control'  value='$t[tgl_lahir]' name='tgl_lahir'/><br>

						

						<label>Program Studi</label>

						<input type='text' class='form-control' value='$t[prodi]' name='prodi'/><br>

						

						<label>kelas</label>

						<input type='text' class='form-control'  value='$t[kelas]' name='kelas'/><br>

						

						

						<input type='hidden' class='form-control' value='$tgl' name='tgl'/><br>

						



            <div class='modal-footer'>

                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                                            <button type='submit' class='btn btn-primary'>Save </button>

                                        </div> </div>

    </form>

    </div></div></div></div></div></div>

";

}

elseif($aksi=='laporan'){
echo"<div class='row'>
                	<div class='col-lg-12'>
                    <h1 class='page-header'>Laporan Transaksi Buku</h1>
                	</div>
                <!-- /.col-lg-12 -->
            	</div>	

                        <div class='row'>
                	<div class='col-lg-12'>
                    	<div class='panel panel-default'>
							
                        <div class='panel-heading'>
                            <i class='fa fa-bar-chart-o fa-fw'></i> Laporan Transaksi Buku
                            
                        </div>
                                <div class='panel-body'>
				 <div class='table-responsive'>";
				 
				 include"mod_laporan/laporan.php";
				 
				 echo"
					</div>
    </div>
   </div>
 </div></div>"; 
}

?>