<?php
$namafolder = "../gmbr_buku/"; //tempat menyimpan file

include "../conn.php";

// print_r($_POST);
// print_r($_FILES);

if (!empty($_FILES["nama_file"]["tmp_name"])) {
    $jenis_gambar = $_FILES['nama_file']['type'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $th_terbit = $_POST['th_terbit'];
    $genre = $_POST['genre'];
    $jumlah_halaman = $_POST['jumlah_halaman'];
    $link_buku = $_POST['link_buku'];


    if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/x-png") {
        $gambar = $namafolder . basename($_FILES['nama_file']['name']);
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
            $sql = "INSERT INTO buku(judul,penulis,th_terbit,genre,jumlah_halaman,gambar,link_buku) VALUES
            ('$judul','$penulis','$th_terbit','$genre','$jumlah_halaman','$gambar','$link_buku')";
            $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            echo "Gambar berhasil dikirim ke direktori" . $gambar;
            echo "<h3><a href='tambah_buku.php'>Tambah Lagi</a></h3>";
            echo "<h3><a href='index.php'>Balik ke page utama</a></h3>";
        } else {
            echo "<p>Gambar gagal dikirim</p>";
        }
    } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
    }
} else {
    echo "Anda belum memilih gambar";
}