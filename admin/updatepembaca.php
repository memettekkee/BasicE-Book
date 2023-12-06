<?php

include "../conn.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$sql = "UPDATE pembaca SET nama='$nama',username='$username',password='$password' WHERE id='$id' ";

$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
header('location:datapembaca.php');