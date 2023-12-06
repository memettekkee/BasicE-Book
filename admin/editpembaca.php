<?php
include "../conn.php";
?>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styletambah.css">
    <title>Rubah </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
                            <?php
                            $id = $_GET['id'];
                            $query = mysqli_query($conn, "SELECT * FROM pembaca WHERE id=$id");
                            $data  = mysqli_fetch_array($query);
                            ?>
    <div class="container">
        <h1 class="jdl">Tambah Buku</h1>
        <form action="updatepembaca.php" method="post" name="form1" class="tulis" enctype="multipart/form-data">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="nama" value="<?php echo $data['nama'] ?>" placeholder="Judul Buku">
                <label for="floatingPassword">Nama</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="username" value="<?php echo $data['username'] ?>" placeholder="Penulis">
                <label for="floatingPassword">Username</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="password" value="<?php echo $data['password'] ?>" placeholder="Tahun Rilis">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $data['id']?>">
                <button type="submit" class="btn btn-danger mt-3">Tambahkan</button>
            </div>
            <!-- <table width="25%" border="0">
               
                <tr class="form-floating">
                    <td class="form-label" >Judul</td>
                    <td><input class="form-control border-danger" type="text" name="judul"></td>
                </tr>
                <tr class="form-floating">
                    <td class="form-label" >Tahun Rilis</td>
                    <td><input class="form-control border-danger" type="text" name="th_terbit"></td>
                </tr>
                <tr class="form-floating">
                    <td class="form-label" >Genre</td>
                    <td><input class="form-control border-danger" type="text" name="genre"></td>
                </tr>
                <tr class="form-floating">
                    <td class="form-label" >Jumlah Halaman</td>
                    <td><input class="form-control border-danger" type="text" name="jumlah_halaman"></td>
                </tr>
                <tr class="form-floating">
                    <td class="form-label" >Foto Sampul</td>
                    <td><input class="form-control border-danger" type="text" name="nama_file"></td>
                </tr>
                <tr class="form-floating">
                    <td class="form-label" >Link E-Book</td>
                    <td><input class="form-control border-danger" type="text" name="link_buku"></td>
                </tr> -->


                <!-- <tr>
                    <td>Penulis</td>
                    <td><input type="text" name="penulis"></td>
                </tr>
                <tr>
                    <td>Tahun Rilis</td>
                    <td><input type="text" name="th_terbit"></td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td><input type="text" name="genre"></td>
                </tr>
                <tr>
                    <td>Jumlah Halaman</td>
                    <td><input type="text" name="jumlah_halaman"></td>
                </tr>

                <tr>
                    <td>Foto Sampul</td>
                    <td><input name="nama_file" type="file" /></td>
                </tr>
                <tr>
                    <td>Link e-Book</td>
                    <td><input type="text" name="link_buku"></td>
                </tr> -->
                <!-- <tr>
                    <td><button type="submit" class="btn btn-danger mt-3"  >Tambahkan</button>
                    </td>
                </tr>
            </table> -->
        </form>

    </div>
    
    

</body>
<footer><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></footer>
</html>