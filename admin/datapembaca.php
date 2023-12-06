<?php
include_once("../conn.php");

$result = mysqli_query($conn, "SELECT * FROM pembaca ORDER BY id DESC");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fakultas Sains dan Teknologi</title>
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
                        <a href="index.php"><i class=""></i>Daftar Buku</a>
                    </li>

                    <li>
                        <a class="active-menu" href="datapembaca.php"><i class=""></i>Data Pembaca</a>
                    </li>

                    <li>
                        <a href="tambahbuku.php"><i class=""></i>Tambah Buku</a>
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
                     <h2>Operator</h2>   
                        <h5>Manage data pembaca yang ada</h5>
                       
                    </div>
                </div>
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Pembaca
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <?php
   
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <th>Username</th>
                                    <td><?php echo $data['username']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td><?php echo $data['nama']; ?></td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td><?php echo $data['password']; ?></td>
                                </tr>
                                <tr>
                                    <th>Manage</th>
                                    <td><a href='editpembaca.php?id=<?= $data["id"]?>'>Ubah</a> | <a href='hapuspembaca.php?id=<?= $data["id"]?>'>Hapus</a></td>
                                </tr>
                                <tr><td>---</td></tr>


                                <?php } ?>
                                <!-- <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tahun Rilis</th>
                                            <th>Genre</th>
                                            <th>Jumlah Halaman</th>
                                            <th></th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                      
                                            echo "<tr>";
                                            echo "<td>" . $user_data['no'] . "</td>";
                                            echo "<td>" . $user_data['kode_barang'] . "</td>";
                                            echo "<td>" . $user_data['Nama_Barang'] . "</td>";
                                            echo "<td>" . $user_data['merek_barang'] . "</td>";
                                            echo "<td>" . $user_data['jumlah_Barang'] . "</td>";
                                            echo "<td>" . $user_data['Kondisi_Barang'] . "</td>";
                                            echo "<td>" . $user_data['keterangan'] . "</td>";
                                            echo "<td><a href='editfst.php?id=$user_data[id]'>Ubah</a> | <a href='deletefst.php?id=$user_data[id]'>Hapus</a></td></tr>"; -->
                                       
                                    </tbody> 
                                </table>
   
</body>
</html>
