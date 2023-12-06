<?php
include("conn.php");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if ($level == 'admin') {

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

	if (empty($username) && empty($password)) {
		header('location:login.html?error=1');
	} else if (empty($username)) {
		header('location:login.html?error=2');
	} else if (empty($password)) {
		header('location:login.html?error=3');
	} else {
		header('location:admin/index.php');

		$q = mysqli_query($conn, "select * from admin where username='$username' and password='$password'");
		$row = mysqli_fetch_array($q); 

		if (mysqli_num_rows($q) == 1) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['password'] = $password;
			

			header('location:admin/index.php');
		} else {
			header('location:login.html?error=4');
		}
	}
} elseif ($level == 'pembaca') {
	
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

	if (empty($username) && empty($password)) {
		header('location:login.html?error=1');
	} else if (empty($username)) {
		header('location:login.html?error=2');
	} else if (empty($password)) {
		header('location:login.html?error=3');
	} else {
		header('location:pembaca/index.php');

		$q = mysqli_query($conn, "select * from pembaca where username='$username' and password='$password'");
		$row = mysqli_fetch_array($q); 

		if (mysqli_num_rows($q) == 1) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['password'] = $password;
			

			header('location:pembaca/index.php');
		} else {
			header('location:login.html?error=4');
		}
	}
}