<?php
include_once("../conn.php");
// print_r($_SESSION);
$result = mysqli_query($conn, "SELECT * FROM buku ORDER BY id DESC");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Book</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>

           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse" style="background: white;">
                <ul class="nav" id="main-menu">
				<li class="text-center" style="background: white;">
                    <img src="../buku.png" class="user-image img-responsive"/>
					</li>
			
                    <li>
                        <a class="active-menu"  href="#"><i class=""></i>Daftar Buku</a>
                    </li>
                    <li>
                    <a href="../login.html"><i class=""></i>Log Out</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>E-Book</h2>   
                        <h5>Baca buku sesuai selera</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Berbagai Macam Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <?php
   
   while ($data = mysqli_fetch_array($result)) {
   ?>
   <tr>
       <th>Judul</th>
       <td><?php echo $data['judul']; ?></td>
   </tr>
   <tr>
       <th>Penulis</th>
       <td><?php echo $data['penulis']; ?></td>
   </tr>
   <tr>
       <th>Tahun Rilis</th>
       <td><?php echo $data['th_terbit']; ?></td>
   </tr>
   <tr>
       <th>Genre</th>
       <td><?php echo $data['genre']; ?></td>
   </tr>
   <tr>
       <th>Jumlah Halaman</th>
       <td><?php echo $data['jumlah_halaman']; ?></td>
   </tr>
   <tr>
       <th>
           <div >
               <img src="<?php echo $data['gambar']; ?>" height="300" width="250" alt="User Image" style="border: 3px solid #333333;" />
           </div>
       </th>
       <td>
           <a href="<?php echo $data['link_buku']; ?>" style="font-size: 50px"> Baca? Klik sini </a>
          
       </td>
   </tr>
   <tr><td>---</td></tr>


   <?php } ?>
                                </table>
   
</body>
</html>
