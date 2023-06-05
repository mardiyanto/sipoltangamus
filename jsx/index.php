<?
session_start();
include "../config/timeout.php";

if($_SESSION[login]==1){
	if(!cek_login()){
		$_SESSION[login] = 0;
	}
}

if($_SESSION[login]==0){
  header('location:logout.php');
}
else{
if (empty($_SESSION['user']) AND empty($_SESSION['pass']) AND $_SESSION['login']==0){
 header("location:../index.php"); 
}
else{
    include "../config/koneksi.php";
	include "../config/class_paging.php";
	include "file.php"; 
	include '../config/transaksi_fungsi.php';
	include "../config/fungsi_rupiah.php";
	include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";
	include "../config/library.php";
    $aksi=$_GET[aksi];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo"$k_k[nama]";?></title>
		   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../sys/bootstrap/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../sys/bootstrap/font/css/font-awesome.min.css">
  <link rel="stylesheet" href="../sys/bootstrap/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../sys/bootstrap/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="../sys/bootstrap/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../sys/bootstrap/dist/css/skins/_all-skins.min.css">
	 	<script src="../sys/bootstrap/plugins/ckeditor/ckeditor.js"></script>  
  </head>
  <body class="hold-transition skin-black">
  
      <header class="main-header">
 <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php?aksi=home"><i class='fa fa-dashboard'></i>Dashboard</a></li> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa  fa-server"></i> kategori  <span class="caret"></span><span class="label pull-right bg-red"><?php echo"$agt";?></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php?aksi=kategori"><span>data kategori </span><span class="label bg-blue pull-right"><?php echo"$agt";?></span></a></li>
          </ul>
        </li>
		   <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-newspaper-o"></i>  Artikel<span class="caret"></span><span class="label pull-right bg-red"><?php echo"$kk";?></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php?aksi=artikel"><i class="fa fa-circle-o"></i> <span>Data Isi </span>
         <span class="label bg-blue pull-right"><?php echo"$kk";?></span></a></li>
          </ul>
        </li>
		<li><a href="index.php?aksi=profil"><i class="fa fa-mortar-board"></i>Profil</a></li> 
		<li><a href="index.php?aksi=kritik"><i class="fa fa-mortar-board"></i>kritik</a></li> 
		<li><a href='index.php?aksi=admin'> <i class='fa  fa-bar-chart'></i>Data Admin</a></li>
	    <li><a href='logout.php'><i class='fa fa-cog'></i>Logout</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      </header>


      <!-- Content Wrapper. Contains page content -->
      <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php?aksi=home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
     
        <?php include"tengah.php"?>
		
            </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


	    <script src="../sys/bootstrap/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- DataTables -->
    <script src="../sys/bootstrap/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../sys/bootstrap/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../sys/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="../sys/bootstrap/plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../sys/bootstrap/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../sys/bootstrap/dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>

  </body>
</html>
<?
}
}
?>



