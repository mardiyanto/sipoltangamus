  <ul class="sidebar-menu">
  <li>
              <a href='index.php?aksi=home'>
                <i class='fa fa-dashboard'></i> <span>Dashboard</span> <i class='fa fa-angle-left pull-right'></i>
              </a> 
 </li>
     <li >
          <a href="#">
            <i class="fa  fa-server"></i> <span>kategori </span>
         <span class="label pull-right bg-red"><?php echo"$agt";?></span>
          </a>
          <ul class="treeview-menu">

	  <li class="active"><a href="index.php?aksi=kategori"><i class="fa fa-circle-o"></i> <span>data kategori </span><span class="label bg-blue pull-right"><?php echo"$agt";?></span></a>
        </a></li>
          </ul>
        </li>  
       <li >
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Isi </span>
         <span class="label pull-right bg-red"><?php echo"$kk";?></span>
          </a>
          <ul class="treeview-menu">
 <li class="active"><a href="index.php?aksi=artikel"><i class="fa fa-circle-o"></i> <span>Data Isi </span>
         <span class="label bg-blue pull-right"><?php echo"$kk";?></span></a></li>
          
          </ul>
        </li>  
		    <li >
          <a href="index.php?aksi=profil">
            <i class="fa fa-mortar-board"></i> <span>Profil</span>
          </a>
        </li> 
			    <li >
          <a href="index.php?aksi=kritik">
            <i class="fa fa-mortar-board"></i> <span>kritik</span>
          </a>

        </li> 
		
  <li>
              <a href='index.php?aksi=admin'>
                <i class='fa  fa-bar-chart'></i> <span>Data Admin</span> <i class='fa fa-angle-left pull-right'></i>
              </a> 
 </li>
	  <li><a href=logout.php><i class='fa fa-cog'></i> <span>Logout</span> <i class='fa fa-angle-left pull-right'></i></a> </li>
</ul>